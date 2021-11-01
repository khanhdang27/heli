@extends('layout.app')

@section('title','FAQ')

@section('content')
<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    text-indent: 0;
  }

  .s1 {
    font-weight: bold;
    text-decoration: underline;
    font-size: 12pt;
  }

  .p,
  p {
    margin: 0pt;
  }


  .h5 {
    font-weight: bold;
  }

  li {
    display: block;
  }

  #l1 {
    padding-left: 0pt;
    counter-reset: c1 1;
  }

  #l1>li>*:first-child:before {
    counter-increment: c1;
    content: counter(c1, upper-latin)". ";
    font-size: 12pt;
  }

  #l1>li:first-child>*:first-child:before {
    counter-increment: c1 0;
  }

  #l2 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l2>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c2, decimal)". ";
  }

  #l2>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  li {
    display: block;
  }

  #l3 {
    padding-left: 0pt;
  }

  #l3>li>*:first-child:before {
    content: " ";
  }

  li {
    display: block;
  }

  #l4 {
    padding-left: 0pt;
  }

  #l4>li>*:first-child:before {
    content: "• ";
  }

  li {
    display: block;
  }

  #l5 {
    padding-left: 0pt;
  }

  #l5>li>*:first-child:before {
    content: "• ";
  }
</style>
<div class="body-content bg-course">
  <div class="container-fluid text-center top-news-page">
    FAQ
  </div>
  <div class="container pt-5">
    <p class="s1" style="padding-left: 6pt;text-indent: 0pt;line-height: 21pt;text-align: left;">
      退款政策
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <ol id="l1">
      <li>
        <p style="padding-top: 4pt;padding-left: 42pt;text-indent: -18pt;text-align: left;">
          如何申請退款？
        </p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <p class="s2" style="padding-left: 42pt;text-indent: 0pt;text-align: left;">
          <a href="mailto:support@theachievers.cc"
            style=" color: black; font-family:SimSun; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt;"
            target="_blank">如確認需要進行退款，請將以下資料電郵至 </a>support@theachievers.cc<span class="p">：</span>
        </p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l2">
          <li>
            <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
              用戶名稱、註冊電郵、註冊電話
            </p>
          </li>
          <li>
            <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
              需要退款的課程和其訂單編號
            </p>
          </li>
          <li>
            <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
              退款原因
            </p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p style="padding-left: 42pt;text-indent: 0pt;line-height: 106%;text-align: left;">
              退款申請被確認後，需要將相關課程筆記
              <span class="s2">(</span>如有<span class="s2">) </span>以親身或郵寄方式退還至
              <span class="s2">The Achievers </span>辦公地址
              <span class="s2">(</span>需要自行承擔退還筆記的一切費用，如運費<span class="s2">)</span>。
            </p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <p style="padding-left: 42pt;text-indent: 0pt;text-align: left;">
              退還筆記後，相關款項會以鑽石
              <span class="s2">(The Achievers </span>平台虛擬貨幣，可用作抵銷訂單金額<span class="s2">) </span>形式發放回你的帳戶中。
            </p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <p style="padding-left: 42pt;text-indent: -18pt;text-align: left;">
          在什麼情況下可申請退款？
        </p>
      </li>
    </ol>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 42pt;text-indent: 0pt;text-align: left;">
      退款機制只適用於標明「無條件退款保證」的線上課程和實時課程。
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 42pt;text-indent: 0pt;text-align: justify;">
      如在體驗線上課程和實時課程後對課程或導師不滿意，均可申請退款（惟必須符合以下情況），相關款項會以鑽石
      <span class="s2">(The Achievers </span>平台虛擬貨幣<span class="s2">) </span>形式發放回你的帳戶中。
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 42pt;text-indent: 0pt;text-align: left;">
      線上課程的退款申請必須符合以下兩項條件：
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <ul id="l3">
      <li>
        <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
          課程的觀看進度少於 <span class="s2">50%</span>
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 42pt;text-indent: 18pt;line-height: 200%;text-align: left;">
          在獲得課程
          <span class="s2">(</span>確認付款日後一天起計<span class="s2">) </span>的
          <span class="s2">14 </span>天內提出退款申請實時課程的退款申請必須符合以下條件：
        </p>
      </li>
      <li>
        <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
          在所報讀班次 <span class="s2">(</span>確認付款日起計<span class="s2">) </span>的第 <span class="s2">2 </span>堂課開始前提出退款申請
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 42pt;text-indent: 18pt;line-height: 200%;text-align: left;">
          如確認付款後只有一堂，將不受理最後一堂開始後的退款申請例如某課程的課堂日期是
          <span class="s2">1 </span>月
          <span class="s2">1 </span>日、<span class="s2">1 </span>月
          <span class="s2">8 </span>日、<span class="s2">1 </span>月
          <span class="s2">15 </span>日、<span class="s2">1 </span>月
          <span class="s2">22 </span>日
        </p>
      </li>
      <li>
        <p style="padding-left: 78pt;text-indent: -18pt;line-height: 106%;text-align: left;">
          確認付款日為 <span class="s2">1 </span>月
          <span class="s2">5 </span>日，<span class="s2">1 </span>月
          <span class="s2">15 </span>日的課堂開始後提交的退款申請將不會受理
        </p>
      </li>
      <li>
        <p style="padding-left: 78pt;text-indent: -18pt;line-height: 106%;text-align: left;">
          確認付款日為 <span class="s2">1 </span>月
          <span class="s2">17 </span>日，<span class="s2">1 </span>月
          <span class="s2">22 </span>日的課堂開始後提交的退款申請將不會受理
        </p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <p style="padding-left: 42pt;text-indent: 0pt;line-height: 106%;text-align: left;">
          如果使用課程組合折扣購買同一課程系列的實時課程，退款申請將以同一課程系列的所有實時課程為一個申請。
        </p>
        <p style="padding-top: 1pt;padding-left: 42pt;text-indent: 0pt;text-align: left;">
          例如你以課程組合折扣購買了某課程的第一期及第二期實時課程：
        </p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
      </li>
      <li>
        <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
          你必須於第一期的第
          <span class="s2">2 </span>堂開始前提出退款申請
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 42pt;text-indent: 18pt;line-height: 200%;text-align: left;">
          將視為同時申請退款第一期及第二期實時課程以下情況的退款申請將不會受理：
        </p>
      </li>
      <li>
        <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
          重複付款但沒有提供收據證明
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 78pt;text-indent: -18pt;line-height: 106%;text-align: left;">
          同一訂單退款 <span class="s2">3 </span>個或以上課程
          <span class="s2">(</span>不包括使用捆綁優惠報讀同一課程系列的情況<span class="s2">)</span>
        </p>
      </li>
      <li>
        <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
          帳戶一年內退款多於 <span class="s2">3 </span>次
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 78pt;text-indent: -18pt;text-align: left;">
          退款成功後再次購買同一課程
        </p>
      </li>
    </ul>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 42pt;text-indent: 0pt;line-height: 106%;text-align: left;">
      退款申請被確認後，需要於
      <span class="s2">5 </span>日內將相關課程筆記<span class="s2">(</span>如有<span class="s2">)</span>以親身或郵寄方式退還至
      <span class="s2">The Achievers </span>辦公地址
      <span class="s2">(</span>需要自行承擔退還筆記的一切費用，如運費<span class="s2">)</span>。退還筆記後，相關款項會以鑽石
      <span class="s2">(The Achievers </span>平台虛擬貨幣<span class="s2">) </span>形式發放回你的帳戶中。
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s2" style="padding-left: 42pt;text-indent: 0pt;text-align: justify;">
      The Achievers
      <span class="p">保留更改退款條款及細則之權利而毋須預先通知。如有任何爭</span>
    </p>
    <p style="padding-top: 4pt;padding-left: 42pt;text-indent: 0pt;line-height: 72%;text-align: justify;">
      議，<span class="s2">The Achievers </span>保留最終決定權。為避免退款政策被濫用及保障導師免受欺詐，若被判斷為濫用退款政策，退款申請有可能被拒絕，<span
        class="h5">或會被禁用帳戶和限制使用所有 </span><span class="s2">The Achievers </span>的相關服務和產品。
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;line-height: 1pt;text-align: left;">
      <span>
        <hr class="bg-black w-100">
      </span>
    </p>
    <p class="s1" style="padding-top: 8pt;padding-left: 6pt;text-indent: 0pt;text-align: left;">
      帳戶相關
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s2" style="padding-top: 4pt;padding-left: 6pt;text-indent: 0pt;line-height: 106%;text-align: left;">
      The Achievers
      <span class="p">為了保障學生與導師的權利，系統會不定期掃描違規行為，違規者將會被封鎖帳戶。</span>
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 6pt;text-indent: 0pt;text-align: left;">
      每一部的課程購買僅供「單一購買會員使用觀看」，不得與他人進行帳戶分享、課程影片分享串流、公開放映之動作、或以任何形式分享<span class="s2">/</span>轉發課堂內容。
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s2" style="padding-left: 24pt;text-indent: 0pt;text-align: left;">
      A. <span class="p">禁止行為</span>
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <ul id="l4">
      <li>
        <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
          發放含有粗言穢語、嘔心、或色情的文字或圖片
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 78pt;text-indent: -18pt;text-align: left;">
          提供有版權之物品，包括但不限於圖片或文檔
          <span class="s2">(</span>例如<span class="s2">: Past Paper</span>）
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 78pt;text-indent: -18pt;text-align: left;">
          於平台上開設多於一個帳戶
          <span class="s2">(</span>俗稱分身<span class="s2">)</span>
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 78pt;text-indent: -18pt;text-align: left;">
          多人共享單一帳號
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 78pt;text-indent: -18pt;line-height: 106%;text-align: left;">
          刊登他人或自己的私人資料，包括但不限於相片、電話號碼、地址或電郵
        </p>
      </li>
      <li>
        <p style="padding-left: 78pt;text-indent: -18pt;text-align: left;">
          濫發主題或留言
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 78pt;text-indent: -18pt;text-align: left;">
          進行未經授權的商業活動
        </p>
      </li>
      <li>
        <p style="padding-top: 1pt;padding-left: 78pt;text-indent: -18pt;text-align: left;">
          向任何人以任何形式作出人身攻擊
        </p>
      </li>
    </ul>
    <p style="padding-left: 6pt;text-indent: 0pt;text-align: justify;">
      若會員違反上述規定，<span class="s2">The Achievers </span>有權利終<span class="s3">⽌</span>帳戶服務，可針對其<span
        class="s3">⾏</span>為所造成之損害與侵權，提出法律訴訟並要求賠償，並得要求會員賠償該課程單價倍數之懲罰性賠償<span
        class="s3">⾦</span>額，及追究相關民、刑事責任，以維護導師及其他會員用戶之權益。
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;line-height: 1pt;text-align: left;">
      <span>
        <hr class="bg-black w-100">
      </span>
    </p>
    <p class="s1" style="padding-top: 8pt;padding-left: 6pt;text-indent: 0pt;text-align: left;">
      付款相關
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s2" style="padding-top: 4pt;padding-left: 24pt;text-indent: 0pt;text-align: left;">
      A. <span class="p">付款方式有哪些？</span>
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p class="s2" style="padding-left: 24pt;text-indent: 0pt;text-align: left;">
      The Achievers <span class="p">暫時提供 </span>5
      <span class="p">種付款方式：</span>
    </p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <ul id="l5">
      <li>
        <p class="s2" style="padding-left: 60pt;text-indent: -18pt;text-align: left;">
          PayPal
        </p>
      </li>
      <li>
        <p class="s2" style="padding-left: 60pt;text-indent: -18pt;line-height: 15pt;text-align: left;">
          Visa
        </p>
      </li>
      <li>
        <p class="s2" style="padding-left: 60pt;text-indent: -18pt;line-height: 15pt;text-align: left;">
          Master
        </p>
      </li>
      <li>
        <p class="s2" style="padding-left: 60pt;text-indent: -18pt;text-align: left;">
          AE
        </p>
      </li>
      <li>
        <p style="padding-left: 60pt;text-indent: -18pt;text-align: left;">
          銀聯
        </p>
      </li>
    </ul>
  </div>
</div>
@endsection