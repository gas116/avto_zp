<?php
$this->title = 'Список контрагентов';
//echo '<pre style="background: #eee">' .print_r(print_r($model) , true). '</pre>';
?>
<div class="wrap-actions">
    <h2>Клиенты МХП</h2>
    <table class="table table-striped">
        <?php foreach ($clients_mhp as $item): ?>
            <tr>
                <td><?=$item['name_point']?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Клиенты Б2Б</h2>
    <table class="table table-striped">
        <?php foreach ($clients_b2b as $item): ?>
            <tr>
                <td><?=$item['name_point']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

