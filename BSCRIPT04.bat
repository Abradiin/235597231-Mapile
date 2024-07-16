@echo off

dir C:\*.txt /s /b /o:-d > files.txt

for /f "tokens=*" %%a in (files.txt) do (
    for /f "tokens=1,2 delims= " %%b in ('dir /tc "%%a" ^| find "%%~nxa"') do (
        set "fileDate=%%c"
        set "fileDate=!fileDate:/=!"
        set "fileDate=!fileDate:~0,4!!fileDate:~4,2!!fileDate:~6,2!"
    )
    set "current_date=%date:~6,4%%date:~3,2%%date:~0,2%"
    set /a "dateDiff=current_date - fileDate"
    if !dateDiff! gtr 30 (
        if not exist "Z:\Archive" mkdir "Z:\Archive"
        move "%%a" "Z:\Archive"
        echo Moved "%%a" to "Z:\Archive"
    )
)

for /f "delims=" %%a in ('dir Z:\Archive\*.txt /b /o:-s') do (
    echo %%a
)

set /p deleteFiles=Do you want to delete these files? (Y/N): 
if /i "%deleteFiles%"=="Y" (
    for /f "delims=" %%a in ('dir Z:\Archive\*.txt /b /o:-s') do (
        del "Z:\Archive\%%a"
        echo Deleted "%%a"
    )
) else (
    echo Operation aborted.
)

del files.txt