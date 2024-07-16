@echo off

:main
echo.
echo 1. Circle
echo 2. Triangle
echo 3. Quadrilateral
choice /c 123 /m "Choose an option: "

if errorlevel 3 goto quadrilateralTab
if errorlevel 2 goto triangleTab
if errorlevel 1 goto circleTab 

:circleTab
echo Enter the radius of the circle:
set /p radius= 
set /a radiusRslt=%radius% * %radius%
set /a pi=314159
set /a areaRslt=%radiusRslt% * %pi% / 100000
echo The area of the circle is: %areaRslt%
pause
goto main

:triangleTab
echo Enter the base of the triangle:
set /p base=
echo Enter the height of the triangle:
set /p height=
set /a areaOfTrngl=%base% * %height% / 2
echo The area of the triangle is: %areaOfTrngl%

rem Had to search this part up
rem Assuming a right triangle, calculate the hypotenuse
set /a baseSquared=%base% * %base%
set /a heightSquared=%height% * %height%
set /a hypotenuseSquared=%baseSquared% + %heightSquared%

rem Calls PowerShell to calculate the hypotenuse
for /f %%A in ('powershell -command "[math]::sqrt(%hypotenuseSquared%)"') do set hypotenuse=%%A

rem Determine the type of triangle
if %base%==%height% (
    echo This is an isosceles right triangle.
) else if %base% lss %hypotenuse% if %height% lss %hypotenuse% (
    echo This is an isosceles right triangle.
) else (
    echo This is a scalene right triangle.
)
pause
goto main

:quadrilateralTab
echo Enter the length:
set /p lngth=
echo Enter the width:
set /p wdth=
set /a areaOfQuad=%lngth% * %wdth%
echo The area of the Quadrilateral is: %areaOfQuad%

if %lngth%==%wdth% (
    echo It's a square
) else (
    echo It's a rectangle
)
pause
goto main

