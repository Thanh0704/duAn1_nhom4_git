<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .contact {
            padding: 40px 20px;
            background-color: white;
            max-width: 800px;
            margin: 20px auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .contact h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        .contact p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .contact form {
            display: flex;
            flex-direction: column;
        }

        .contact label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .contact input, .contact textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        .contact button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        .contact button:hover {
            background-color: #45a049;
        }
    </style>
<div class="mb">
        <div class="box_title">LIÊN HỆ</div>
        <div class="box_content">
        <section class="contact">
        <h2>Liên Hệ Với Chúng Tôi</h2>
        <p>Nếu bạn có bất kỳ câu hỏi hay phản hồi nào, vui lòng liên hệ với chúng tôi qua biểu mẫu dưới đây:</p>
        <form>
            <label for="name">Họ và Tên:</label>
            <input type="text" id="name" name="name" placeholder="Nhập họ và tên của bạn" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>

            <label for="message">Tin nhắn:</label>
            <textarea id="message" name="message" rows="5" placeholder="Nhập tin nhắn của bạn" required></textarea>

            <button type="submit">Gửi</button>
        </form>
    </section>
        </div>
</div>