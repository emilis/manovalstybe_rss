<h3>Statistika:</h3>
<br/>
<img src="<?=IMAGE_URL.$image_name?>" alt="statistics" />

<table>
<tr>
  <th>&nbsp;</th>
  <th>�i savaite</th>
  <th>Praejusi savaite</th>
  <th>Skirtumas</th>
</tr>
<tr>
  <td>max</td>
  <td><?=$st['current']['max']?></td>
  <td><?=$st['prior']['max']?></td>
  <td><?=_n($st['diff']['max'])?></td>
</tr>
<tr>
  <td>avg</td>
  <td><?=$st['current']['avg']?></td>
  <td><?=$st['prior']['avg']?></td>
  <td><?=_n($st['diff']['avg'])?></td>
</tr>
<tr>
  <td>min</td>
  <td><?=$st['current']['min']?></td>
  <td><?=$st['prior']['min']?></td>
  <td><?=_n($st['diff']['min'])?></td>
</tr>
</table>