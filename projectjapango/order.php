<form action="cart.php?op=createOrder" method="post">



</style>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 取得表單資料
  $item_id = $_POST['item_id'] ?? '';
  $quantity = $_POST['quantity'] ?? 1;

  // 檢查商品 ID 是否合法
  if ($item_id && isset($items[$item_id-1])) {
    $item_name = $items[$item_id-1]['name'];
    
    // 儲存到 session
    session_start();
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }
    $_SESSION['cart'][] = array(
      'item_id' => $item_id,
      'item_name' => $item_name,
      'quantity' => $quantity
    );
  }
}

// 顯示購物車內容
session_start();
if (isset($_SESSION['cart'])) {
  echo '<h3>購物車內容:</h3>';
  echo '<ul>';
  foreach ($_SESSION['cart'] as $item) {
    echo '<li>'.$item['item_name'].' x '.$item['quantity'].'</li>';
  }
  echo '</ul>';
}
?>
<!--  下面是調整參數 -->
  <label for="item_name">購物清單 </label>
  <input type="hidden" id="item_id" name="item_id" value="<?php echo $_GET['item_id'] ?? ''; ?>">
    <h2><?php echo $items[$_GET['item_id']-1]['name'] ?? ''; ?></h2>


  <label for="quantity">購買數量:</label>
  <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
  
  <br>
  <input class="buyBtn" type="submit" value="加入購物車">
</form> 

<style>
  label {
  display: block; /* 設定為塊級元素 */
  margin-bottom: 0.5em; /* 下方留出一些間距 */
  font-weight: bold; /* 設定為粗體字 */
}

input[type="number"] {
  display: inline-block; /* 設定為行內元素 */
  padding: 0.5em; /* 設定內邊距 */
  border: 1px solid #ccc; /* 設定邊框 */
  border-radius: 3px; /* 設定圓角 */
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1); /* 設定內陰影 */
  font-size: 1em; /* 設定文字大小 */
}

input[type="number"]:focus {
  outline: none; /* 移除焦點時的外框 */
  border-color: #0077cc; /* 設定焦點時的邊框顏色 */
  box-shadow: 0 0 3px rgba(0, 119, 204, 0.4); /* 設定焦點時的外陰影 */
}