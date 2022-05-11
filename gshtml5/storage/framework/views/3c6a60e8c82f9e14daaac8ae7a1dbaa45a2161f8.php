<div class="row row-cols-1 row-cols-md-3 mb-3 text-center justify-content-center">
    <?php $categorias=[[
        "nombre"=>"Ráiz",
        "url"=>"/categoria/raiz",
    ]]

    ?>


    <?php for($i=0; $i<count($categorias); $i++): ?>
        <div class="col-12 col-sm-3 col-md-3 col-lg-3 ">
            <a href="<?php echo e($categorias[$i]["url"]); ?>" class="enlaces__categorias link">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="py-3 ">
                        <h2><?php echo e($categorias[$i]["nombre"]); ?></h2>
                    </div>
                </div>
            </a>
        </div>
    <?php endfor; ?>
</div>
<?php /**PATH C:\Users\josea\OneDrive\GSHTML5\gshtml5\resources\views/categoriagrid.blade.php ENDPATH**/ ?>