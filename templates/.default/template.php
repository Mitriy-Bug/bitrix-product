<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<table border="1" cellpadding="8px" cellspacing="0">
<? while($product = $arResult->GetNext()) { ?>
      <tr>
            <td><?= $product['ID']; ?></td>
            <td><?= $product['NAME']; ?></td>
      </tr>
<? } ?>
</table>
