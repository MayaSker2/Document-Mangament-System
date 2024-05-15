# Document Management System
Develop a Document Management System built using Laravel

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/MayaSker2/Document-Mangament-System.git
2. Install dependencies:
    ```bash
    composer install
3. Create a .env file and configure your database connection:
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=document
    DB_USERNAME=root
    DB_PASSWORD=
4.  Generate an application key:
    ```bash
    php artisan key:generate
5. Run database migrations:
    ```bash
    php artisan migrate
6. Start the development server:
    ```bash
    php artisan serve
7. You Must run the migrations and seeders:
    ```bash
    php artisan migrate --seed

# Api Documentation JSON
    ```bash
    
{
    "client": "Thunder Client",
    "collectionName": "Document management system",
    "folderName": "",
    "environmentName": "",
    "collectionId": "a03dc8c7-59d7-4808-b956-fe85bec233de",
    "folderId": "",
    "environmentId": "",
    "dateExported": "2024-05-15T16:12:14.241Z",
    "avgResponseTime": 308,
    "totalDuration": 1239,
    "totalIterations": 1,
    "totalPassed": 1,
    "totalFailed": 0,
    "failedIterations": [],
    "iterations": [
        {
            "iteration": 1,
            "duration": 1239,
            "avgResponseTime": 308,
            "totalRequests": 4,
            "totalPassed": 4,
            "totalSkipped": 0,
            "totalFailed": 0,
            "requests": [
                {
                    "reqId": "88edfcdd-aa59-48c7-9045-597306f8fc61",
                    "name": "document",
                    "method": "POST",
                    "url": "http://127.0.0.1:8000/api/document",
                    "resCode": 200,
                    "resTime": 270,
                    "resTimeText": "270 ms",
                    "resSize": 142,
                    "preScriptTime": 1,
                    "preReqTime": 2,
                    "reqTime": 274,
                    "postScriptTime": 0,
                    "passed": 0,
                    "total": 0,
                    "tests": [],
                    "skipped": false,
                    "resSizeText": "142 Bytes"
                },
                {
                    "reqId": "a4346a41-9682-4761-aed6-709604a95fef",
                    "name": "section",
                    "method": "POST",
                    "url": "http://127.0.0.1:8000/api/section",
                    "resCode": 200,
                    "resTime": 329,
                    "resTimeText": "329 ms",
                    "resSize": 140,
                    "preScriptTime": 1,
                    "preReqTime": 1,
                    "reqTime": 338,
                    "postScriptTime": 0,
                    "passed": 0,
                    "total": 0,
                    "tests": [],
                    "skipped": false,
                    "resSizeText": "140 Bytes"
                },
                {
                    "reqId": "0f7f3a33-4125-412c-8143-4d212d0bc240",
                    "name": "file",
                    "method": "GET",
                    "url": "http://127.0.0.1:8000/api/file",
                    "resCode": 200,
                    "resTime": 269,
                    "resTimeText": "269 ms",
                    "resSize": 30,
                    "preScriptTime": 0,
                    "preReqTime": 2,
                    "reqTime": 273,
                    "postScriptTime": 0,
                    "passed": 0,
                    "total": 0,
                    "tests": [],
                    "skipped": false,
                    "resSizeText": "30 Bytes"
                },
                {
                    "reqId": "6726ab13-2839-4461-aa95-a5bf535ee74b",
                    "name": "auth",
                    "method": "POST",
                    "url": "http://127.0.0.1:8000/api/register",
                    "resCode": 422,
                    "resTime": 365,
                    "resTimeText": "365 ms",
                    "resSize": 104,
                    "preScriptTime": 0,
                    "preReqTime": 1,
                    "reqTime": 370,
                    "postScriptTime": 0,
                    "passed": 0,
                    "total": 0,
                    "tests": [],
                    "skipped": false,
                    "resSizeText": "104 Bytes"
                }
            ]
        }
    ]
}