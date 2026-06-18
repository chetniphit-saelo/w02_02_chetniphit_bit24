<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          /* 1. เปลี่ยนพื้นหลังของหน้าเว็บทั้งหมดเป็นสีเทาอ่อนเหมือนหน้าแรก */
          html {
               background-color: #f0f2f5;
               height: 100%;
          }

          /* 2. เปลี่ยน body ให้กลายเป็นการ์ดสีขาวที่มีกรอบและเงา เหมือนกล่องฟอร์มหน้าแรก */
          body {
               font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
               background: white; /* พื้นหลังกล่องเป็นสีขาว */
               padding: 40px 30px;
               border-radius: 12px;
               box-shadow: 0 8px 20px rgba(0,0,0,0.1); /* เงาเหมือนหน้าแรก */
               border: 2px solid #e2e8f0; /* เส้นขอบฟอร์ม */
               
               /* จัดตำแหน่งกล่องให้อยู่กึ่งกลางหน้าจอพอดี */
               width: 100%;
               max-width: 320px;
               margin: 0 auto;
               position: absolute;
               top: 50%;
               left: 50%;
               transform: translate(-50%, -50%);
               box-sizing: border-box;

               /* จัดตัวหนังสือภายในกล่อง */
               text-align: center;
               color: #4a5568;
               font-size: 1.15rem;
               font-weight: 600;
               line-height: 1.8;
          }

          /* ปรับระยะห่างของเว้นบรรทัด PHP ให้สวยงาม */
          br {
               content: "";
               margin: 10px 0;
               display: block;
          }

          /* 3. แต่งปุ่มกลับหน้าแรกให้เป็นปุ่มกดเต็มตัว สไตล์เดียวกับปุ่มคำนวณ */
          a {
               display: block;
               width: 100%;
               background-color: #3182ce; /* สีฟ้าเดียวกับปุ่มคำนวณ */
               color: white;
               text-decoration: none;
               padding: 12px;
               border-radius: 6px;
               font-size: 1rem;
               font-weight: bold;
               cursor: pointer;
               transition: background-color 0.2s ease;
               margin-top: 20px;
               box-sizing: border-box;
          }

          a:hover {
               background-color: #2b6cb0; /* สีเข้มขึ้นตอนเอาเมาส์วาง */
          }

          a:active {
               transform: scale(0.98); /* ยุบตัวตอนกดเหมือนปุ่มหน้าแรก */
          }
     </style>
</head>
<body>
     
     <?php
          $celsius = $_POST["celsius"];
          

          echo "เซลเซียส : " . $celsius . "<br>";
          

          $Rankine = ($celsius+273.15)*9/5;
          echo "แรงคิน : " . $Rankine . "<br>";

     ?>

     <a href="index.php">กลับหน้าแรก</a>

</body>
</html>