<?
$brands = get_field('brands');
?>

<? if (!empty($brands)): ?>
    <div class="aw-hero__paypal-cards__table">
        <table>
            <tbody>
                <? foreach ( $brands as $i => $brand ): ?>
                    <tr>
                        <td>
                            <span><?=$i+1;?></span>
                        </td>
                        <td>
                            <? if (!empty($brand['logo'])): ?>
                                <a <?if (!empty($brand['logo']['link'])):?>href="<?=$brand['logo']['link'];?>"<?endif;?>>
                                    <? if (!empty($brand['logo']['image'])): ?>
                                        <img
                                            src="<?=$brand['logo']['image']['url'];?>"
                                            alt="<?=$brand['logo']['image']['alt'];?>"
                                            title="<?=$brand['logo']['image']['title'];?>"
                                        >
                                    <? endif; ?>
                                </a>
                            <? endif; ?>
                        </td>
                        <td>
                            <? if (!empty($brand['bonus'])): ?>
                                <span><?=$brand['bonus'];?></span>
                            <? endif; ?>
                        </td>
                        <td>
	                        <? if (!empty($brand['button'])): ?>
                                <button <?if (!empty($brand['button']['link'])):?>data-url="<?=$brand['button']['link'];?>"<?endif;?>>
                                    <? if (!empty($brand['button']['title'])): ?>
                                        <?=$brand['button']['title'];?>
                                    <? endif; ?>
                                </button>
	                        <? endif; ?>
                        </td>
                    </tr>
                <? endforeach; ?>
            </tbody>
        </table>
    </div>
<? endif; ?>