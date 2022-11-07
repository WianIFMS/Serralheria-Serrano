


<p style="background-color: green"><?php echo @$success; ?></p>
<p style="background-color: red"><?php echo @$danger; ?></p>
<p style="background-color: orange"><?php echo @$change; ?></p>
<div class="table-responsive">

    <table class="table table-striped table-sm">
        <thead>
            <tr>

                <th>Descrição</th>	
                <th>Valor</th>	 		

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($vetorProdutos as $key => $value) {
                //var_dump($value);
                ?>
                <tr>

                    <td><?= $value['descricao'] ?></td>	

                    <td><?= $value['valor'] ?></td>
                    <td>
                        <form method="post" action="form_clientes.php">	 				
                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                <button value="submit" class="btn btn-success">	
                                    <svg class="bi bi-check-box" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 003 14.5h10a1.5 1.5 0 001.5-1.5V8a.5.5 0 00-1 0v5a.5.5 0 01-.5.5H3a.5.5 0 01-.5-.5V3a.5.5 0 01.5-.5h8a.5.5 0 000-1H3A1.5 1.5 0 001.5 3v10z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="produtos/adm.php">
                            <input type="hidden" name="op" value="del">
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                    <button value="submit" class="btn btn-danger"><svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
                                        </svg>	
                                    </button>
                                    </form>
                                    </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                </table>
                                </div> 
