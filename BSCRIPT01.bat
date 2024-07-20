@echo off

rem Starts 5 websites in Microsoft Edge browser
start msedge "https://www.facebook.com/"
start msedge "https://youtube.com/"
start msedge "https://leonardreyes.notion.site/Platform-Technologies-1401038dae77468e9e76e0bcd20b4bc2"
start msedge "https://play.typeracer.com"
start msedge "https://www.roblox.com"

rem Starts notepad and calc
start "" notepad.exe
start "" calc.exe

rem Starts system shutdown in a few seconds
echo System is shutting down
shutdown /s /t 10