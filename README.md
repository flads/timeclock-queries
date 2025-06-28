# Timeclock Queries
SQL query playground, for studies only.

### Database Schema
![Database Schema](https://raw.githubusercontent.com/flads/timeclock-queries/master/public/database-schema.png)

### Routes:
- [GET] _http://localhost:8000/api/get-registers-count_;
- [GET] _http://localhost:8000/api/get-inner-join_;
- [GET] _http://localhost:8000/api/get-left-join_;
- [GET] _http://localhost:8000/api/get-right-join_;
- [GET] _http://localhost:8000/api/get-inner-join-lateral_;
- [GET] _http://localhost:8000/api/get-subquery_.

### How to use
- `php artisan app:populate`
- Make your queries...