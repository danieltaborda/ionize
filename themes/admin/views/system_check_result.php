<?php

/**
 * Displays one result for a system check
 * Called through XHR by : /admin/system_check.php
 *
 */

?>
<tr>
	<td><?= $title ?></td>
	<td class="center"><span class="<?= $result_status ?>"><?= $result_text ?></span></td>
	<td class="center"><a class="icon ok ml10"></a></td>
</tr>
