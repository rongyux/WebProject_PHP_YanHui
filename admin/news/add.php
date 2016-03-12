<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";
$sqlClass='select * from newsclass order by id';

 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>
	<title>index</title>

	<link rel="stylesheet" href="../public/kd/themes/default/default.css" />
	<link rel="stylesheet" href="../public/kd/plugins/code/prettify.css" />
	<script charset="utf-8" src="../public/kd/kindeditor.js"></script>
	<script charset="utf-8" src="../public/kd/lang/zh_CN.js"></script>
	<script charset="utf-8" src="../public/kd/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : '../public/kd/plugins/code/prettify.css',
				uploadJson : '../public/kd/php/upload_json.php',
				fileManagerJson : '../public/kd/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body>
	<center>
	<h3>添加商品</h3>	
	<form action="insert.php" method='post' enctype='multipart/form-data'  name="example">
		<table width='' border='1px' cellspacing='0'>
			<tr>
				<td>标题:</td>
				<td><input type="text" name='title'></td>
			</tr>	
	
			<!-- <tr>
				<td>图片:</td>
				<td><input type="file" name='image'></td>
			</tr>	 -->
			<tr>
				<td>栏目:</td>
				<td>
					<select name="newsclassId" id="">
						<option value="">--请选择栏目1--</option>
						<?php 							
							foreach($rstClass=$pdo->query($sqlClass) as $rowClass){								
								print_r($rowClass);
								echo "<option value='{$rowClass['id']}'>{$rowClass['level1']}</option>";
							}
						 ?>
					</select>
				</td>
			</tr>	
			<tr>
				<td>摘要:</td>
				<td><input type="text" name='abstract'></td>
			</tr>	
			<tr>
				<td>上墙</td>	
				<td>
					<input type="radio" name="shelf" id="r1" value='1'><label for='r1'>上墙</label>
					<input type="radio" name="shelf" id="r2" value='0'><label for='r2'>下墙</label>
				</td>	
			</tr>
			<tr>
				<td>内容:</td>
				<td><textarea name="content1" style="width:700px;height:200px;visibility:hidden;"></textarea><br />	</td>
				
			</tr>	
			<tr>
				<td><input type="submit" name="button" value="提交"></td>
				<td><input type="reset" name="button" value="重置"></td>
			</tr>
		</table>
	</form>

	</center>
</body>
</html>