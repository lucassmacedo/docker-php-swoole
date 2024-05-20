[program:nginx]
depends_on = octane
command = nginx -g "daemon off;"
stopasgroup = true
stderr_logfile = /dev/stderr
stdout_logfile = /dev/stdout

[program:octane]
command = su-exec kool php artisan octane:start --server=swoole{!! $prod ? '' : ' --watch' !!}
stopasgroup = true
stderr_logfile = /dev/stderr
stdout_logfile = /dev/stdout
