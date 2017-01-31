<?php include ROOT . '/views/layouts/header.php'; ?>
<?php include ROOT . '/components/AdminBase.php'; ?>
<?php include ROOT . '/controllers/AdminController.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <h4>Привет, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
                <?php if (AdminBase::checkAdmin()):?>
                <li><a href="/admin/">Админпанель</a></li>
                <?php endif;?>
            </ul>
                
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>