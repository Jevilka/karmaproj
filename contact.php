<?php include 'includes/header.php'; ?>
<h2>Связаться со мной</h2>
<form action="contact.php" method="post">
    <div class="form-group">
        <label for="name">Никнейм</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Адрес эл.почты</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="message">Сообщение/Вопрос</label>
        <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
<?php include 'includes/footer.php'; ?>
