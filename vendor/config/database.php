return [
    'connections' => [
      'mongodb' => [
      'driver' => 'mongodb',
      'dsn' => env('MONGODB_URI'),
      'database' => 'YOUR_DATABASE_NAME',
    ],
    //You can keep other existing connections
  ],