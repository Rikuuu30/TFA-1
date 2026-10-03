@echo off
setlocal
cd /d "%~dp0"

if not exist ".env" (
    copy "env" ".env" >nul
)

set "ZEN_PHP=php"
where php >nul 2>nul
if errorlevel 1 (
    if exist "C:\xampp\php\php.exe" (
        set "ZEN_PHP=C:\xampp\php\php.exe"
    ) else (
        echo PHP was not found. Install PHP 8.2 or newer, then try again.
        pause
        exit /b 1
    )
)

if not exist "vendor\autoload.php" (
    echo Dependencies are missing. Run: composer install
    pause
    exit /b 1
)

echo.
echo Zen Supply POS is starting at http://localhost:8081
echo Keep this window open. Press Ctrl+C to stop the server.
echo.
"%ZEN_PHP%" spark serve --host localhost --port 8081
