<?php
$header = get_field('header');
$body = get_field('body');
?>
<div class="aw-scroll-table">
	<? if (!empty($header)): ?>
		<table>
			<thead>
                <tr>
                    <? foreach ($header['cell'] as $item): ?>
                        <th><?=$item['cell_text'];?></th>
                    <? endforeach; ?>
                </tr>
			</thead>
		</table>
	<? endif; ?>
    <? if (!empty($body)): ?>
        <div class="aw-scroll-table__body">
            <table>
                <tbody>
                    <? foreach ($body['rows'] as $row): ?>
                        <tr>
                            <? foreach ($row['cells'] as $cell): ?>
                                <td><?=$cell['cell_text'];?></td>
                            <? endforeach; ?>
                        </tr>
                    <? endforeach; ?>
                </tbody>
            </table>
        </div>
    <? endif; ?>
</div>