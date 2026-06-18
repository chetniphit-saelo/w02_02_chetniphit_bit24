<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          body {
               font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
               background-color: #f0f2f5;
               display: flex;
               flex-direction: column;
               align-items: center;
               justify-content: center;
               min-height: 100vh;
               margin: 0;
               color: #333;
          }

          h1 {
               color: #2c3e50;
               font-size: 1.8rem;
               margin-bottom: 20px;
               text-align: center;
               background: white;
               padding: 15px 25px;
               border-radius: 10px;
               box-shadow: 0 4px 6px rgba(0,0,0,0.05);
          }

          form {
               background: white;
               padding: 30px;
               border-radius: 12px;
               box-shadow: 0 8px 20px rgba(0,0,0,0.1);
               width: 100%;
               max-width: 320px;
               box-sizing: border-box;
          }

          label {
               display: block;
               font-weight: 600;
               margin-bottom: 8px;
               color: #4a5568;
          }

          input[type="text"] {
               width: 100%;
               padding: 10px 12px;
               border: 2px solid #e2e8f0;
               border-radius: 6px;
               font-size: 1rem;
               transition: all 0.3s ease;
               box-sizing: border-box;
          }

          input[type="text"]:focus {
               border-color: #3182ce;
               outline: none;
               box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.2);
          }

          br {
               display: none; /* ซ่อนเพื่อจัดระยะห่างด้วย margin แทน เพื่อความสวยงาม */
          }

          input[type="submit"] {
               width: 100%;
               background-color: #3182ce;
               color: white;
               border: none;
               padding: 12px;
               border-radius: 6px;
               font-size: 1rem;
               font-weight: bold;
               cursor: pointer;
               transition: background-color 0.2s ease;
               margin-top: 15px;
          }

          input[type="submit"]:hover {
               background-color: #2b6cb0;
          }

          input[type="submit"]:active {
               transform: scale(0.98);
          }
     </style>
     </head>
<body>
     
     <h1>งานที่ 2 เจตนิพิฐ BIT.2/4 เลขที่ 2  👁️👄👁️</h1>

     <form action="result.php" method="post">
          <label for="">เซลเซียส</label>
          <input type="text" name="product_name"> <br>



          <input type="submit" value="คำนวณ">
     </form>

</body>
</html>