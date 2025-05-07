
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }
    .email-container {
      max-width: 600px;
      margin: auto;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      overflow: hidden;
    }
    .header {
      background-color: #4CAF50;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .content {
      padding: 30px;
      color: #333;
    }
    .content h2 {
      margin-top: 0;
      color: #4CAF50;
    }
    .btn {
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }
    .footer {
      text-align: center;
      font-size: 12px;
      color: #888;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="email-container">
    <div class="header">
      <h1>Thank You!</h1>
    </div>
    <div class="content">
      <h2>Thanks for Purchasing {{$course->title}} Course ({{$course->batch}})</h2>
      <p>Hi {{$enroll->name}},</p>
      <p>We’re thrilled to have you join our course. You're one step closer to enhancing your skills and knowledge.</p>
      <p>If you have any questions or need support, feel free to contact us anytime.</p>
      <a href="https://samairagroup.com/samaira-skill-development-institute" class="btn">Start Learning</a>
    </div>
    <div class="footer">
      &copy; Samaira Group. All rights reserved.
    </div>
  </div>
</body>
</html>
