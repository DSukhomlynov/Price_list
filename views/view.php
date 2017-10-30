<?php include ROOT . '/views/layouts/header.php'; ?>

    <body>

<section id="page">

    <aside>
        <ul>
            <li><a class="activefix" href="/">Starting page</a></li>
        </ul>
    </aside>

    <div id="main">
        <p class="logo" id="logotip">Testing work</p>

        <div id="show3">
            <h2>Результаты для даты ниже 25.11.2017</h2>

            <div class="table-wrap">
                <table>
                    <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>Описание</th>
                        <th>Номер документа</th>
                        <th>Дата документа</th>
                        <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php foreach ($data as $elem): ?>
                    <tr>
                        <td data-label="Наименование"><?= $elem['title'] ?></td>
                        <td data-label="Описание"><?= $elem['description'] ?></td>
                        <td data-label="Номер документа"><?php
	                        if ($elem['doc_id'] == NULL){
		                        echo 'Нет номера';
	                        } else {
	                        	echo $elem['doc_id'];
	                        }
	                        ?></td>
                        <td data-label="Дата документа"><?php
                            if ($elem['datetime'] == NULL){
                                echo 'Нет даты';
                            } else {
                                echo $elem['datetime'];
                            }
	                        ?></td>
                        <td data-label="Цена"><?php
                            if ($elem['price'] == NULL){
                                echo 'Нет цены';
                            } elseif ($elem['status'] == 0){
                            	echo 'Цена скрыта';
                            } else {
                                echo $elem['price'];
                            }
	                        ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    </tbody>
                </table>
            </div>



</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>