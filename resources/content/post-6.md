---
post_id: 6
view: layout.post
path: /post-6
date: 2023-10-08
posts_section: [ 6, 5, 4, 3, 2, 1 ]
---

# Properly Sciolistic Security

While consolidating the many many MySQL and MSSQL servers I inherited I was tasked with migrating a home grown application that supported processing and chargeback of returned mail.  What it was used for is immaterial. But when I say that it was bespoke, it was bespoke.  Very Bespoke VB.  No documentation ofcourse.  That's a given.

First step would be to figure out which of the 24 different SQL servers are implicated and find out how the application is configured on which server to use.  When reviewing the file structure `Application\ConfigSQL.ini` seemed like a natural place to look.  Oh good, a .ini.  This should be straight forward.

After opening the file I'm confronted with this;

```ini
[server]JanetSQL[Cnn_Server]ïîòø¡íèõõíä¡ãôææäó­¡àóäï¦õ¡øà¾ïîòø¡íèõõíä¡ãôææäó­¡àóäï¦õ¡øà¾ïîòø¡íèõõíä¡ãôææäó­¡àóäï¦õ¡øà¾°
*[server]JanetSQL[Cnn_Server]ïîòø¡íèõõíä¡ãôææäó­¡àóäï¦õ¡øà¾ïîòø¡íèõõíä¡ãôææäó­¡àóäï¦õ¡øà¾ïîòø¡íèõõíä¡ãôææäó­¡àóäï¦õ¡øà¾° 
```

What the hell is that?  Do I need Some obscure Windows process/tool?  A hexeditor?  A drink?  A new job?  This is unlike any .ini i've ever seen.  Why is there an asterisk?  Maybe I missed something in my 30 years of doing this.  And does Janet have her own SQL server?  When you have SQL servers provisioned and named after employees, you're in a special place.

I managed to find a copy of the application source on a NAS drive, because why would it be in Git when you can zip it onto a locally administered (administered by no one) NAS drive with no backups.

After `grep`-ing the code base for a few things and clutching at straws this turns up.

```VB
Public Sub LoadSQLServerSettings()
    Dim oRead As New StreamReader(Application.StartupPath 
        & "\ConfigSQL.ini", System.Text.Encoding.UTF7)
    ...
    utConfig.sCnnCurrent = EncryptDecryptString(sLine.Substring(sLine.IndexOf("Cnn_Server]") + 11))
    ...
```

What the hell is UTF-7?  And why on earth would anyone want to use that?  I haven't heard of this encoding before.  According to [Wikipedia; a dead format](https://en.wikipedia.org/wiki/UTF-7).  Much like the rest of the technology used in this company.  But half of the .ini was legible.  So was half of the file UTF-8 and the other half UTF-7?

This gets even better because it's an even more (ob)secure-ified .ini.  Obviously we need to `EncryptDecryptString()` this "UTF-7".

```VB
Public Function EncryptDecryptString(ByVal sTXT As String) As String
    ...
    For iCount = 0 To sTXT.Length - 1
        sTmp = sTmp & Chr(Asc(sTXT.Substring(iCount, 1)) Xor 129)
    Next
    EncryptDecryptString = sTmp
End Function
```

And then I laughed and I laughed.  If anything work should be fun.  

Thankfully the configuration details are kept secured using XOR "encryption".  Phew.  Good thing.  Evidently the data is sensitive enough to protect, but not sensitive enough to implement any actual protection.  We're just making things up as we go here.

So is there a tool to decode"crypt" and edit the configuration file?

While scouring the various databases to which I only happen to have access to thanks to a saved password in Microsoft SQL Management Studio almost a dozen stored procedures turn up.  One function stands out: `fn_EncryptDecryptString()`.

The tool used to modify the VB application configuration file (using XOR) is an MSSQL stored procedure.  You need an SQL server to XOR a string.

```SQL
CREATE FUNCTION [dbo].[fn_EncryptDecryptString] ( @pClearString VARCHAR(1000) )
    --RETURNS NVARCHAR(1000) WITH ENCRYPTION AS --(use this line to hide the code)
    RETURNS NVARCHAR(1000)  AS
    BEGIN

    DECLARE @vEncryptedString NVARCHAR(1000)
    DECLARE @vIdx INT
    DECLARE @vBaseIncrement INT

    SET @vIdx = 1
    SET @vBaseIncrement = 128
    SET @vEncryptedString = ''

    WHILE @vIdx <= LEN(@pClearString) 
    BEGIN 
        SET @vEncryptedString = @vEncryptedString 
            + NCHAR(ASCII( SUBSTRING(@pClearString, @vIdx, 1)) ^129) 
        SET @vIdx = @vIdx + 1 
    END 

    RETURN @vEncryptedString 
END 
```

So what configuration secrets does the XOR hide? Copy and paste the illegible encoded portion into the SQL function.

```ini
Data Source=DarthVador\SQLFJ;Initial Catalog=DataProcessingV2;Persist Security Info=True;User ID=USERNAME;Password=USERPASSWORD
```

Ofcourse a Star Wars reference.  In a .ini semicolons are comments right?  No no, not here, not now.  We're in a galaxy far far away.  Currently semicolons are used as field delimiters.  Asterisks are used to denote the presently active configuration line.  UTF-7 is meaningless, XOR is encryption and editing .inis passes for entertainment.

```VB
    While oRead.Peek <> -1
        sLine = oRead.ReadLine()
        If sLine.Substring(0, 1) = "*" Then Exit While
    End While
```

Oh, and the referenced MSSQL server turned out to be running on a laptop.  Of a user (Janet ofcourse) that had long left the company.  But I'm still here.

