@extends('layout.app')

@section('title','Terms and Conditions')

@section('content')
<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    text-indent: 0;
  }

  h5 {
    font-weight: bold;
  }

  p {
    margin: 0pt;
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
    content: counter(c1, decimal)". ";
    font-weight: bold;
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
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l2>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l3 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l3>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l3>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l4 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l4>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l4>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l5 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l5>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l5>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l6 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l6>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l6>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l7 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l7>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l7>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l8 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l8>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l8>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l9 {
    padding-left: 0pt;
  }

  #l9>li>*:first-child:before {
    content: "• ";
  }

  #l10 {
    padding-left: 0pt;
  }

  #l10>li>*:first-child:before {
    content: "• ";
  }

  #l11 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l11>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l11>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l12 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l12>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l12>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l13 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l13>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l13>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l14 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l14>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l14>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l15 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l15>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l15>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l16 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l16>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l16>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l17 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l17>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l17>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l18 {
    padding-left: 0pt;
  }

  #l18>li>*:first-child:before {
    content: "• ";
  }

  #l19 {
    padding-left: 0pt;
  }

  #l19>li>*:first-child:before {
    content: "• ";
  }

  #l20 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l20>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l20>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l21 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l21>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l21>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l22 {
    padding-left: 0pt;
  }

  #l22>li>*:first-child:before {
    content: "• ";
  }

  #l23 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l23>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l23>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l24 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l24>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l24>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l25 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l25>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l25>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l26 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l26>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l26>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l27 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l27>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l27>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  li {
    display: block;
  }

  #l28 {
    padding-left: 0pt;
  }

  #l28>li>*:first-child:before {
    content: "• ";
  }
</style>
<div class="body-content bg-course">
  <div class="container-fluid text-center top-news-page">
    Terms and Conditions
  </div>
  <div class="container pt-5">
    <ol id="l1">
      <li>
        <h5 style="padding-top: 4pt;padding-left: 23pt;text-indent: -18pt;text-align: left;">These Terms</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l2">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">The Achievers’ mission is to provide
              students with an effective, interactive, affordable and healthy learning environment. We enable anyone
              anywhere to create and share educational courses (instructors) and to enrol in these educational courses
              to
              learn (students). We consider our marketplace model the best way to offer valuable educational content to
              our users. We need rules to keep our platform and services safe for you, us and our student and instructor
              community. These Terms apply to all your activities on the website of The Achievers.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">These terms of use govern your use and
              access to our services, including our website(s), our application(s), our application programming
              interfaces
              (APIs), our notifications and any information or content appearing therein (collectively our “Platform”).
            </p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">By using our Platform, you agree to these
              terms regardless of whether you are paying user or a non-paying visitor. If you are using our Platform as
              a
              representative of an entity, you are agreeing to these terms on behalf of that entity.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You should also read our Privacy Policy
              which sets out how we collect and use your personal information.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">About us and how to contact us</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l3">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We are The Achievers Online Academy
              Limited, a company registered in Hong Kong, trading as The Achievers. Our company registration number is
              (<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</u>) and our registered office is at (<u>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</u>).</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">For any questions or problems relating to
              our Platform, our products or services, or these terms, you can contact us by WhatsApp our customer
              service
              team at (<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</u> or emailing us at
              <a href="mailto:info@theachievers.cc" target="_blank">info@theachievers.cc.</a></p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We are the data controller in relation to
              our Platform and are responsible for
              your personal data. Please refer to our Privacy Policy which is available at <a
                href="http://www.theachievers.cc/" class="a" target="_blank"> www.theachievers.cc</a> for
              information about what personal data we collect and what we do with it. It is important that you read our
              privacy policy, which may be updated from time to time, and understand how we use your information and the
              rights that you have about your information.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">If we have to contact you, we will do so
              by
              telephone or by WhatsApp or by emailing to you at the phone number or email address you provided to us.
            </p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">When we use the words
              &quot;writing&quot; or &quot;written&quot; in these terms, this includes emails.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Changes of terms</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l4">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We may amend these terms from time to
              time
              by posting the updated terms on our Platform. If we make material changes, we will notify you of the
              changes
              before they become effective. By continuing to use our Platform and our services after the changes come
              into
              effect means that you agree to be bound by the revised policy.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Availability of our services</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l5">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We are constantly changing and improving
              our Platform and the products or services we provide. We may from time to time change or discontinue any
              of
              the products or services we offer, or add or remove functionalities or features, and we may suspend or
              stop
              certain products, services, functionalities or features altogether. If we discontinue certain products,
              services, functionalities or features, we will give you advance notice where reasonably possible.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We may release products, services,
              functionalities or features that we are still testing and evaluating. We will label such services as
              “beta”,
              “preview”, “early access” or “trial” or any words or phrases with similar meanings. You understand that
              these beta services are not as reliable as other products or services we offer.</p>
          </li>
          <li>
            <p style="padding-top: 4pt;padding-left: 41pt;text-indent: -18pt;text-align: left;">We reserve the right to
              limit your use of our Platform and the services we provide, including the right to restrict, suspend or
              terminate your account if we believe you are in breach of these terms or are misusing our Platform or any
              services we provide.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: justify;">We try our best to ensure that our
              Platform is always available, but we do not guarantee that the operation of or access to our Platform will
              be uninterrupted or continuous. Our Platform may be interrupted for maintenance, repairs, upgrades,
              network
              or equipment failures.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You are responsible for configuring your
              information technology, computer programmes and platform or system in order to access our Platform. We do
              not guarantee that our Platform will be free from bugs or viruses.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Your account and password</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l6">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You need an account for most activities
              on
              our platform, including to purchase and enrol in a course or to submit a course for publication. When
              setting up and maintaining your account, you must provide and continue to provide accurate and complete
              information, including a valid email address and phone number. You have complete responsibility for your
              account and everything that happens on your account, including for any harm or damage (to us or anyone
              else)
              caused by someone using your account without your permission. This means you need to be careful with your
              password. You may not transfer your account to someone else or use someone else’s account without their
              permission. If you contact us to request access to an account, we will not grant you such access unless
              you
              can provide us the login credential information for that account. In the event of the death of a user, the
              account of that user will be closed.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You agree not to share your account
              credentials or give others access to your account. If and when we detect that an account is shared by
              multiple users, we may treat this as a security breach and suspend or terminate your account.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We have the right to disable any
              password,
              whether chosen by you or allocated by us, at any time, if in our reasonable opinion you are in breach of
              these terms.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">You agree to follow our
              Acceptable Use Policy, which is set out at the end of these terms.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You are responsible for all actions or
              activities that happens by, through or under your account, unless you report misuse.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Course Enrolment and Lifetime Access</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l7">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Under our Instructor Agreement, when
              instructors publish a course on The Achievers, they grant The Achievers a license to offer a license to
              the
              course to students. This means that we have the right to sublicense the course to the students who enrol
              in
              the course. As a student, when you enrol in a course, whether it’s a free or paid course, you are getting
              from The Achievers a license to view the course via the platform and Services of The Achievers, and The
              Achievers is the licensor of record. Courses are licensed, and not sold, to you. This license does not
              give
              you any right to resell the course in any manner (including by sharing account information with a
              purchaser
              or illegally downloading the course and sharing it on torrent sites).</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">In legal, more complete terms, The
              Achievers grants you (as a student) a limited, non- exclusive, non-transferable license to access and view
              the courses and associated content for which you have paid all required fees, solely for your personal,
              non-commercial, educational purposes through the Services, in accordance with these Terms and any
              conditions
              or restrictions associated with a particular courses or feature of our Services. All other uses are
              expressly prohibited. You may not reproduce, redistribute, transmit, assign, sell, broadcast, rent, share,
              lend, modify, adapt, edit, create derivative works of, sublicense, or otherwise transfer or use any course
              unless we give you explicit permission to do so in a written agreement signed by a The Achievers
              authorized
              representative. This also applies to content you can access via any of our APIs.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We generally give a lifetime access
              license
              to our students when they enrol in a course. However, we reserve the right to revoke any license to access
              and use courses at any point in</p>
            <p style="padding-top: 4pt;padding-left: 41pt;text-indent: 0pt;text-align: left;">time in the event where we
              decide or are obligated to disable access to a course due to legal or policy reasons, for example, if the
              course you enrolled in is the object of a copyright complaint. The lifetime access is not applicable to
              add-on features and services associated with a course, for example translation captions of courses may be
              disabled by instructors at any time, and an instructor may decide at any time to no longer provide
              teaching
              assistance or Q&amp;A services in association with a course. To be clear, the lifetime access is to the
              course content but not to the instructor.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Instructors may not grant licenses to
              their
              courses to student directly and any such direct license shall be null and void and a violation of these
              Terms.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Payments, Credits, and Refunds</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l8">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Pricing</p>
            <ul id="l9">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">The prices of courses on The
                  Achievers
                  are determined based on the terms of the Instructor Agreement.</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">We regularly run promotions and sales
                  for our courses and certain courses are only available at discounted prices for a set period of time.
                  The price applicable to a course will be the price at the time you complete your purchase of the
                  course
                  (at checkout). Any price offered for a particular course may also be different when you are logged
                  into
                  your account from the price available to users who aren’t registered or logged in, because some of our
                  promotions are available to new users only.</p>
              </li>
            </ul>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">Payments</p>
            <ul id="l10">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">You agree to pay the fees for courses
                  that you purchase, and you authorize us to charge your debit or credit card or process other means of
                  payment (such as Bank Transfer or mobile wallet) for those fees. The Achievers works with third party
                  payment processing partners to offer you the most convenient payment methods in your country and to
                  keep
                  your payment information secure. Check out our Privacy Policy for more details.</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">When you make a purchase, you agree
                  not
                  to use an invalid or unauthorized payment method. If your payment method fails and you still get
                  access
                  to the course you are enrolling in, you agree to pay us the corresponding fees within thirty (30) days
                  of notification from us. We reserve the right to disable access to any course for which we have not
                  received adequate payments.</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">In some cases, we may issue diamonds
                  to
                  your account. These diamonds will not expired, and have no cash value.</p>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
              </li>
            </ul>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Content and Behaviour Rules</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l11">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You may not access or use the Services or
              create an account for unlawful purposes. Your use of the Services and behaviour on our platform must
              comply
              with applicable local or national laws or regulations of your country. You are solely responsible for the
              knowledge of and compliance with such laws and regulations that are applicable to you.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">If we are put on notice that your course
              or
              content violates the law or the rights of others (for example, if it is established that it violates
              intellectual property or image rights of others, or is about an illegal activity), if we believe your
              content or behaviour is unlawful, inappropriate, or objectionable (for example if you impersonate someone
              else), we may remove your content from our platform. The Achievers complies with copyright laws.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We may terminate or suspend your
              permission
              to use our platform and Services or ban your account at any time, with or without notice, for any
              violation
              of these Terms, if you fail to pay any fees when due, upon the request of law enforcement or government
              agencies, for extended periods of inactivity, for unexpected technical issues or problems, or if we
              suspect
              that you engage in fraudulent or illegal activities. Upon any such termination we may delete your account
              and content, and we may prevent you from further access to the platforms and use of our Services. Your
              content may still be available on the platforms even if your account is terminated or suspended. You agree
              that we will have no liability to you or any third party</p>
            <p style="padding-top: 4pt;padding-left: 41pt;text-indent: 0pt;text-align: left;">for termination of your
              account, removal of your content, or blocking of your access to our platforms and services.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">If one of our instructors has published a
              course that infringes your copyright or trademark rights, please let us know. Under our Instructor
              Agreement, we require our instructors to follow the law and respect the intellectual property rights of
              others.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Use of the Platform</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l12">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You must comply with the Acceptable Use
              Policy and all applicable laws and regulatory requirements, including privacy laws and intellectual
              property
              laws in using or accessing the Platform.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Subject to your payment of applicable
              fees,
              we give you a personal, worldwide, royalty-free, non-assignable, non-transferrable, non-sublicensable,
              non-exclusive and revocable licence to access and use our Platform, including any software or application
              as
              part of the services we offer. This licence is for the sole purpose of enabling you to use and enjoy the
              benefit of our Platform as provided by us and in the manner as permitted by these terms.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">This licence to use our Platform will
              terminate if you do not comply with these terms or other additional terms or conditions imposed by us from
              time to time.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You must not copy, modify, distribute,
              sell, lease, loan or trade any access to the Platform or any data or information on it.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Your rights</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l13">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You retain your rights to any information
              or content you submit, post or display on or through the Platform (“Your Content”). By submitting, posting
              or displaying such content, you grant us a worldwide, non-exclusive, royalty-free licence (with the right
              to
              sublicense) to use, process, copy, reproduce, adapt, modify, publish, transmit, display and distribute
              such
              content in any and all media or through any distribution channels (now known or later developed), subject
              to
              the applicable provisions in our Privacy Policy.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You are responsible for your use of Your
              Content and any consequences thereof, including any consequences of the use of Your Content by other users
              or third parties. We are not responsible or liable for any use of Your Content, nor the use of any content
              or information submitted or posted by other users or visitors.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You warrant that Your Content is not and
              will not infringe rights of any third parties and that you have all the necessary rights, power and
              authority to satisfy your obligations with regard to Your Content under these terms.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">If you believe your intellectual property
              rights have been infringed, please
              contact us by emailing us at <a href="mailto:info@theachievers.cc" class="a" target="_blank">
                info@theachievers.cc</a> or WhatsApp our customer service team (<u>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</u>).</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Our rights</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l14">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">The content you post as a student or
              instructor (including courses) remains yours. By posting courses and other content, you allow The
              Achievers
              to reuse and share it but you do not lose any ownership rights you may have over your content. If you are
              an
              instructor, be sure to understand the course licensing terms that are detailed in the Instructor
              Agreement.
            </p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">When you post comments, questions,
              reviews,
              and when you submit to us ideas and suggestions for new features or improvements, you authorize The
              Achievers to use and share this content with anyone, distribute it and promote it on any platform and in
              any
              media, and to make modifications or edits to it as we see fit. In legal language, by submitting or posting
              content on or through the platforms, you grant us a worldwide, non-exclusive, royalty-free license (with
              the
              right to sublicense) to use, copy, reproduce, process, adapt, modify, publish, transmit, display, and
              distribute your content in any and all media or distribution methods (existing now or later developed).
              This
              includes making your content available to other companies, organizations, or individuals who partner with
              The Achievers for the syndication, broadcast, distribution, or publication of content on other media. You
              represent and warrant</p>
            <p style="padding-top: 4pt;padding-left: 41pt;text-indent: 0pt;text-align: justify;">that you have all the
              rights, power, and authority necessary to authorize us to use any content that you submit. You also agree
              to
              all such uses of your content with no compensation paid to you.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We may (at our discretion but are not
              obliged to) review content or information submitted or posted by users on our Platform. We reserve the
              right
              to remove any content which we consider as offensive, harmful, deceptive, discriminative, defamatory or
              otherwise inappropriate or misleading, or content that we believe may be infringing rights of third
              parties.
              We do not endorse or support any views expressed by any users on our Platform.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Our name “The Achievers” and our marks
              and
              logos are our trademarks (be it registered or unregistered) and may not be used without our express prior
              written consent.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Integrations</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l15">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We integrate with third-party software to
              provide a full suite of functionalities to our users. We are not responsible for any issues or loss
              arising
              from the use of any third-party software. Your access and use of the third-party software is governed by
              the
              terms of service or user agreements of that software.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Feedback</h5>
        <ol id="l16">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We value and welcome feedback on our
              Platform. You agree that we are free to use, disclose, adopt and/or modify any feedback and any
              information
              (including any ideas, concepts, proposals, suggestions or comments) provided by you to use in connection
              with our Platform or any products or services we offer, without any payment to you.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You hereby waive and agree to waive any
              rights to claim for any fees, royalties, charges or other payments in relation to our use, disclosure,
              adoption and/or modification of any of your feedback.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Limitation on liabilities</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l17">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Some countries or jurisdictions may not
              allow the disclaimers in this clause, in which case these disclaimers will not apply to you.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">To the fullest extent permitted by law,
              we
              (including our holding company (ies), subsidiaries, affiliates, directors, officers, employees, agents,
              representatives, partners and licensors (collectively, “Our Entities”)) expressly limit our liabilities in
              connection with or arising out of the provision of the Platform as follows:</p>
            <ul id="l18">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">we provide the Platform and any
                  products or services we offer on an “as is” and “as available” basis, and your access to or use of our
                  Platform is at your own risk;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">we give no assurance, representation
                  or
                  warranty of any kind (whether express or implied) about the Platform and any products or services we
                  provide;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">we do not guarantee that the
                  information or content you find on the Platform is always accurate, truthful, complete and up-to-date;
                </p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">we expressly disclaim all warranties
                  and representations (for example, warranties of merchantability, fitness for a particular purpose, and
                  non-infringement);</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">we are not responsible for any delay
                  or
                  disruption in our Platform or any defect, viruses, bugs or errors; and</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">we are not responsible for the
                  conduct
                  of or any content or information submitted or posted by any user of the Platform (whether online or
                  offline).</p>
              </li>
            </ul>
          </li>
          <li>
            <p style="padding-left: 77pt;text-indent: -54pt;text-align: left;">To the fullest extent permitted by law,
              Our
              Entities are not liable to you or others for:</p>
            <ul id="l19">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">any indirect,
                  incidental, special, exemplary, consequential or punitive damages; or</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">any loss of data,
                  business, opportunities, reputation, profits or revenues,</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">relating to the use
                  of our Platform or any products or services we offer.</p>
              </li>
            </ul>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: justify;">We do not exclude or limit our
              liability
              to you where it would be illegal to do so. This includes any of our liability for fraud or making
              fraudulent
              misrepresentation in operating the Platform or providing the products or services we offer.</p>
          </li>
          <li>
            <p style="padding-top: 4pt;padding-left: 41pt;text-indent: -18pt;text-align: left;">Other than the types of
              liabilities that we cannot limit by law, the liabilities of Our Entities to you (on aggregate) are limited
              to the amount you have paid us (if any) for the use of our Platform or for any products or services we
              offer
              over the last twelve (12) months.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Indemnity</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l20">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You agree to indemnify and hold Our
              Entities harmless from and against all liabilities, damages, claims, costs (including legal fees and
              costs),
              and expenses in connection with or arising from (i) your breach of these terms, (ii) your use of our
              Platform and/or (iii) any misrepresentation made by you.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You also agree to fully co-operate with
              us
              in the defence or settlement of any claim in relation to or arising out of our Platform or these terms.
            </p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Termination</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l21">
          <li>
            <p style="padding-left: 77pt;text-indent: -54pt;text-align: left;">These terms will continue to apply until
              terminated by either you or us as follows.</p>
          </li>
          <li>
            <p style="padding-left: 77pt;text-indent: -54pt;text-align: left;">You may stop using the Platform any time
              by
              deactivating your account.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We reserve the right to suspend or
              terminate your access to our Platform, if we reasonably believe:</p>
            <ul id="l22">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">you are in serious or repeated breach
                  of these terms (including a prolonged failure to settle any payment);</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">you are using the Platform in a
                  manner
                  that would cause a real risk of harm or loss to us, other users, or the public;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">we are requested to do so by
                  government
                  or regulatory authorities or as required under applicable laws, regulations or legal processes; or</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">our provision of
                  the
                  Platform to you is no longer possible or commercially viable.</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">In any of the above cases, we will
                  notify you by the email address associated with your account or at the next time you attempt to access
                  your account, unless we are prohibited from notifying you by law.</p>
              </li>
            </ul>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Where we consider necessary or
              appropriate,
              we will report any breach of these terms (or the Acceptable Use Policy) to law enforcement authorities and
              we will cooperate with such authorities by disclosing your identity and providing any information about
              you
              within our systems to them.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Entire agreement</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l23">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">These terms constitute the entire
              agreement
              between any user and us in relation to the use of or any transactions on the Platform. These terms
              supersede
              and extinguish all other agreements, promises, assurances, warranties, representations and understandings
              between any user and us, whether written or oral, in relation to the use of or any transactions on the
              Platform.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You acknowledge that you will have no
              remedies in respect of any statement, representation, assurance or warranty (whether made innocently or
              negligently) that is not set out in these terms.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Other important terms</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l24">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We may transfer our rights and
              obligations
              under these terms to another organisation. We will contact you to let you know if we plan to do this. If
              you
              do not wish to continue the contract with the transferee, you may contact us to end the contract within
              one
              (1) calendar month of us informing you of the proposed transfer and we will refund you any payments you
              have
              made in advance for any products not provided.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You may only transfer your rights or your
              obligations under these terms to another person if we agree to this in writing.</p>
          </li>
          <li>
            <p style="padding-top: 4pt;padding-left: 41pt;text-indent: -18pt;text-align: left;">If a court finds part of
              this contract illegal, the rest will continue in force. Each of the paragraphs of these terms operates
              separately. If any court or relevant authority decides that any of them are unlawful, the remaining
              paragraphs will remain in full force and effect.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Even if we delay in enforcing this
              contract, we can still enforce it later. If we do not insist immediately that you do anything you are
              required to do under these terms, or if we delay in taking steps against you in respect of your breaking
              this contract, that will not mean that you do not have to do those things and it will not prevent us
              taking
              steps against you at a later date. For example, if you miss a payment and we do not chase you but we
              continue to provide the products, we can still require you to make the payment at a later date.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Contact</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l25">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">
              If you have any questions about these terms or the Acceptable Use Policy,
              please
              contact us by <a href="mailto:info@theachievers.cc" target="_blank">info@theachievers.cc.</a></p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Governing law and jurisdiction</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l26">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">These terms are governed by and shall be
              construed in accordance with the laws of the Hong Kong Special Administrative Region.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">The courts of the Hong Kong Special
              Administrative Region shall have exclusive jurisdiction to settle any dispute or claim arising out of or
              in
              connection with these terms.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Acceptable Use Policy</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l27">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">As part of the terms of use, you agree
              not
              to misuse the Platform or help anyone else to do so. For example, you agree not to do any of the following
              in connection with the Platform:</p>
          </li>
        </ol>
      </li>
    </ol>
    <ul id="l28">
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">use our Platform for
          unlawful
          or unauthorised purposes;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">re-sell or attempt to benefit in a commercial
          fashion from any data, content or information available on the Platform;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">probe, scan, or test the
          vulnerability of any system or network;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">breach or otherwise
          circumvent any security or authentication measures or service use limits;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">access, tamper with, or use
          non-public areas or parts of the Platform;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">interfere with or disrupt any user, host, or
          network, for example by sending a virus, trojan, worm, logic bomb, or any other material that is malicious or
          technologically harmful, overloading, flooding, spamming, or mail-bombing any part of the Platform, or by
          scripting the creation of any content in such manner as to interfere with or create an undue burden on the
          Platform;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">reverse engineer, decompile, disassemble,
          decipher or otherwise attempt to derive the source code for the Platform or any related technology that is not
          open source;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">access, search, or create accounts for the
          Platform by any means (automated or otherwise) other than our publicly supported interfaces (for example,
          &quot;scraping&quot; or creating accounts in bulk) or attempt to do so;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">send unsolicited
          communications, promotions or advertisements, or spam;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">forge any TCP/IP packet
          header or any part of the header information in any email;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">send altered, deceptive, or false
          source-identifying information, including &quot;spoofing&quot; or &quot;phishing&quot;;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">conduct surveys, contests, or pyramid
          schemes,
          or promote or advertise products or services without appropriate authorisation;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">abuse referrals or
          promotions;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">post, publish, upload, display, distribute,
          or
          share materials that are unlawful, inappropriate, profane, pornographic, obscene, indecent, libellous,
          defamatory, abusive, or knowingly false, and/or that infringe intellectual property rights;</p>
      </li>
      <li>
        <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">violate the letter or spirit of our terms of
          use;</p>
      </li>
      <li>
        <p style="padding-top: 3pt;padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">violate
          applicable laws or regulations in any way; or</p>
      </li>
      <li>
        <p style="padding-left: 5pt;text-indent: 18pt;line-height: 193%;text-align: left;">violate the privacy or
          infringe
          the rights of others.</p>
      </li>
    </ul>

    <p>
      (As of 16/09/2021)
    </p>
  </div>
</div>
@endsection