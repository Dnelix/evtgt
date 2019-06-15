<div class="content-body">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
              <?php echo uniqid().'<br/>'; ?>
              <?php echo uniqid('EVT')."<br/>"; ?>
              <?php echo uniqid('EVT',true)."<br/>"; ?>
              <?php $code = md5(time().mt_rand(1,100)); ?>
              <?php echo $code."<br/>"; ?>
              <?php echo substr($code,6,5)."<br/>"; ?>
            </div>
        </div>
    </div>
</div>