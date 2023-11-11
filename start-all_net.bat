start cmd /k npm run dev
for /f "delims=[] tokens=2" %%a in ('ping -4 -n 1 %ComputerName% ^| findstr [') do set NetworkIP=%%a
start cmd /k php artisan serve --host %NetworkIP%
cd "C:\xampp"
xampp_start
start http://localhost/phpmyadmin/
start www.google.com.ar
cd "C:\Users\Gonzalo\AppData\Local\Programs\Microsoft VS Code\"
Code.exe