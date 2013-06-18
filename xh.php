<?
xhprof_enable();
//xhprof_enable(XHPROF_FLAGS_NO_BUILTINS); 不记录内置的函数
//xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);  同时分析CPU和Mem的开销
$xhprof_on = true;

//我觉得用xhprof_enable();就够用了，只统计运行时间(Wall Time)。

//生产环境可使用：
if (mt_rand(1, 10000) == 1) {
   xhprof_enable();
      $xhprof_on = true;
      }


 //     尾部：
      if($xhprof_on){
      $xhprof_data = xhprof_disable();
      $xhprof_root = '/var/www/';
      include_once $xhprof_root."xhprof_lib/utils/xhprof_lib.php";
      include_once $xhprof_root."xhprof_lib/utils/xhprof_runs.php";
      $xhprof_runs = new XHProfRuns_Default();
      $run_id = $xhprof_runs->save_run($xhprof_data, "hx");
      echo '<a href="http://localhost/xhprof_html/index.php?run='.$run_id.'&source=hx" target="_blank">统计</a>';
      }
?>
