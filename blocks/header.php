<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd"  fill="currentColor"></path></svg>
        <span class="fs-4">itProger</span>
    </a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Главная</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Контакты</a>
    </nav>
    <?php
        if($_COOKIE['user'] == 'Да'):
    ?>
    <a class="btn btn-outline-primary" href="/auth.php">Кабинет пользователя</a>
    <?php else: ?>
    <a class="btn btn-outline-primary" href="/auth.php">Войти</a>
    <?php endif; ?>
</div>