<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <?php $this->load->view("dependencies/style"); ?>
</head>
<body>
    <div class="container">
        <h3 class="text-center">TODO List</h3>
        <div class="row">
           <div class="com-md-12">
            <div class="row">
            <form action="<?php echo base_url("todo/insert"); ?>" method="post">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="form-group">
                                <input type="text" name="todo_title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-1">
                        <button class="btn-primary">Kaydet</button>
                        </div>
                    </div>
                </form>
            </div>
           </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <th class="text-center">Açıklama</th>
                        <th class="text-center">Durum</th>
                        <th class="text-center">Tarih</th>
                        <th class="text-center">Sil</th>
                    </thead>
                    <tbody>
                        <?php foreach ($todos as $todo) { ?> 
                        <tr>
                            <td><?php echo $todo->name; ?></td>
                            <td style="width:100px;" class="text-center">
                                        <input
                                            type="checkbox"
                                            data-url="<?php echo base_url("todo/isCompletedSetter/$todo->id"); ?>"
                                            class="js-switch" <?php echo ($todo->status) ? "checked" : ""; ?> />
                            </td>
                            <td style="width:100px;" class="text-center"><?php echo $todo->createdAt; ?></td>
                        <td style="width:100px;" class="text-center"><a href="<?php echo base_url("todo/delete/$todo->id");?>" class="btn btn-danger">Sil</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <?php $this->load->view("dependencies/script"); ?>
</body>
</html>