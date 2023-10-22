---
post_id: 8
view: layout.post
path: /post-8
date: 2023-10-21
posts_section: [ 7, 6, 5, 4, 3, 2, 1 ]
---

# bbbbloat

[Project Honeynet challenges](https://www.honeynet.org/challenges/forensic-challenge-1-pcap-attack-trace/) in 2010 were the first forensic challenges I stumbled across.  Since then many of these platforms sprang up.  There are so many to choose from; [hack the box](https://www.hackthebox.com/), [try hack me](https://tryhackme.com/), [PicoCTF](https://picoctf.org/), and hundreds of [other CTFs](https://ctftime.org/) and [leetcode](https://leetcode.com/) programming challenges. Not to mention [Advent of Code](https://adventofcode.com/).

I've always found security and reverse engineering interesitng though I haven't had time to commit to learning it to the extent that I would have liked.  Prior to this I've completed a singular challenge from https://crackmes.one/. 

## Enter PicoCTF

I found a few minutes to try the bbbbloat reverse engineering challenge from PicoCTF.  

I'm currently using an M1 Mac.  All of my tools are arm64 but bbbbloat is a amd64 binary.  I came across box64 which can be used to run amd64 on an arm architecture.

Running the program prompts for the input of a number.

My assembly experience might be pretty much limited to 8080 assembly in school 2 decades ago though I've always appreciated its application in exploit development.

> The methodology?

Open Ghidra and Scroll around to find the the entry function, what would be main().  This function contains an if statement that compares against a number.  This took less than a minute to find.  Enter the number and the flag is printed out! Luck had nothing to do with it... 

![xlimage](/assets/images/8/2.png)
![xlimage](/assets/images/8/3.png)

> Enter the flag - Success!

![xlimage](/assets/images/8/1.png)

> This challenge has a 96% solve rate!

Wow! Phew, confidence still in tact!
