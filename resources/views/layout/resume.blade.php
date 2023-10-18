<!DOCTYPE>

<html>
<head>
    <title>{!!basename($file);!!}</title>
</head>

<body style="margin:0;">
    <embed 
        width="100%" 
        height="100%" 
        src="data:application/pdf;base64,{!!base64_encode(file_get_contents($file));!!}#toolbar=0&navpanes=0&scrollbar=0" 
        type="application/pdf">
</body>
</html>

