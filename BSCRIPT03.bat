@echo off

:main
echo.
echo 1. Display configuration of TCP/IP
echo 2. Display/End task
echo 3. Disk utilities
choice /c 123 /m "Choose an option: "

if errorlevel 3 goto diskUtils
if errorlevel 2 goto taskCommands
if errorlevel 1 goto ipConfiguration

:ipConfiguration
ipconfig
pause
goto main

:taskCommands
tasklist
echo.
choice /c yn /m "Do you want to terminate a program?: (y/n)"

if errorlevel 2 goto no
if errorlevel 1 goto yes

:yes
echo You've chosen to end a task, please enter the name of the program you wish to terminate
set /p endProgram=
taskkill /IM %endProgram%
pause
echo Task has ended

:no
echo You chose no
goto main

:diskUtils
chkdsk