@extends('layout.app')

@section('title','Privacy and Cookie Policy')

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
  }

  p {
    margin: 0pt;
  }

  h5 {
    text-decoration: none;
    font-weight: bold;
  }

  .a {}

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
  }

  #l3>li>*:first-child:before {
    content: "• ";
  }

  #l4 {
    padding-left: 0pt;
  }

  #l4>li>*:first-child:before {
    content: "o ";
  }

  #l5 {
    padding-left: 0pt;
  }

  #l5>li>*:first-child:before {
    content: "o ";
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
  }

  #l7>li>*:first-child:before {
    content: "• ";
  }

  #l8 {
    padding-left: 0pt;
  }

  #l8>li>*:first-child:before {
    content: "• ";
  }

  #l9 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l9>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l9>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l10 {
    padding-left: 0pt;
    counter-reset: c2 1;
  }

  #l10>li>*:first-child:before {
    counter-increment: c2;
    content: counter(c1, decimal)"."counter(c2, decimal)". ";
  }

  #l10>li:first-child>*:first-child:before {
    counter-increment: c2 0;
  }

  #l11 {
    padding-left: 0pt;
  }

  #l11>li>*:first-child:before {
    content: "• ";
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
  }

  #l14>li>*:first-child:before {
    content: "• ";
  }
</style>
<div class="body-content bg-course">
  <div class="container-fluid text-center top-news-page">
    Privacy and Cookie Policy
  </div>
  <div class="container pt-5">
    <p class="s1" style="padding-top: 4pt;padding-left: 168pt;text-indent: 0pt;text-align: center;">Privacy and Cookie
      Policy</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">This policy sets out the basis
      on
      which The Achievers Online Academy</p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Limited of (<u> </u>) (Company Number<u> </u>)
      (together with our subsidiaries, our holding company, subsidiaries of our holding company from time to time,
      collectively called &quot;<b>The Achievers</b>&quot; or “<b>we</b>”) collects personal data from you and how we
      process such data.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">By visiting our website The Achievers.com.hk (our
      “<b>Site</b>”) or using The Achievers, you accept and consent to the practices set out below.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <ol id="l1">
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Collection of information</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l2">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">For the purposes outlined in Clause 2, we
              may collect and process the following information about you:</p>
            <ul id="l3">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">Information you give us - information
                  that you provide us (which may include your name, address, email address, telephone number, credit
                  card
                  information and other personal description) by filling in forms on our Site, or by corresponding with
                  us
                  (by phone, email or otherwise), for example:</p>
                <ul id="l4">
                  <li>
                    <p style="padding-left: 95pt;text-indent: -18pt;line-height: 13pt;text-align: left;">when you
                      register
                      for an account with us on our Site;</p>
                  </li>
                  <li>
                    <p style="padding-left: 95pt;text-indent: -18pt;line-height: 13pt;text-align: left;">when you report
                      any problem to us;</p>
                  </li>
                  <li>
                    <p style="padding-left: 95pt;text-indent: -18pt;line-height: 13pt;text-align: left;">when you use
                      certain features on our Site;</p>
                  </li>
                  <li>
                    <p style="padding-left: 95pt;text-indent: -18pt;line-height: 13pt;text-align: left;">when you
                      request
                      any support from us; or</p>
                  </li>
                  <li>
                    <p style="padding-left: 95pt;text-indent: -18pt;line-height: 13pt;text-align: left;">when you
                      complete
                      any survey or questionnaire we send you.</p>
                  </li>
                </ul>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">Information we collect about you -
                  information automatically collected when you visit our Site, for example:</p>
                <ul id="l5">
                  <li>
                    <p style="padding-left: 77pt;text-indent: -18pt;text-align: left;">technical information, including
                      the Internet protocol (IP) address used to connect your computer to the Internet and your log-in
                      information, browser type and version, time zone setting, browser plug-in types and versions,
                      operating system and platform;</p>
                  </li>
                  <li>
                    <p style="padding-left: 77pt;text-indent: -18pt;line-height: 13pt;text-align: left;">details of any
                      transactions, purchases and payments you made on our Site; and</p>
                  </li>
                  <li>
                    <p style="padding-left: 77pt;text-indent: -18pt;text-align: left;">information about your visit,
                      including the full Uniform Resource Locators (URLs), clickstream to, through and from our site
                      (including date and time), products you viewed or searched for, page response times, download
                      errors, length of visits to certain pages, page interaction information (such as scrolling,
                      clicks,
                      and mouse- overs), methods used to browse away from the page, and any phone number used to call
                      our
                      customer service number; and</p>
                  </li>
                </ul>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">Information we receive from third
                  parties - We work with third parties and we may receive information about you from them, for example,
                  business partners, sub-contractors in technical, payment and delivery services, advertising networks,
                  analytics providers, search information providers, or credit reference agencies. We will notify you
                  when
                  we receive information about you from them and the purposes for which we intend to use that
                  information.
                </p>
              </li>
            </ul>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We only retain personal data for so long
              as
              it is necessary. Data may be archived as long as the purpose for which the data was used still exists.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Uses made of the information</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l6">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We use information held about you for the
              following purposes:</p>
            <ul id="l7">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">providing,
                  improving
                  and developing our services;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">researching,
                  designing and launching new features or products;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">presenting content and information in
                  our Site in the most effective manner for you and for the device you use;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">providing you with alerts, updates,
                  materials or information about our services or other types of information that you requested or signed
                  up to;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">collecting overdue amounts;</p>
              </li>
              <li>
                <p style="padding-top: 3pt;padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">
                  complying with laws and regulations applicable to us in or outside of Hong Kong;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">responding or
                  taking
                  part in legal proceedings, including seeking professional advice;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">for direct
                  marketing
                  purposes (please see further details in Clause 2.2 below);</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">communicating with
                  you and responding to your questions or requests; and</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">purposes directly
                  related or incidental to the above.</p>
              </li>
            </ul>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We intend to use your personal data in
              direct marketing (i.e. offering or advertising products or services by sending the relevant information
              directly to you). We require your consent specifically for this purpose and you may opt out any time. For
              the purpose of this clause:</p>
            <ul id="l8">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">the personal data that may be used in
                  direct marketing are those that you provide to us or we collect from you under Clause 1.1 above;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">the type of services or products that
                  may be offered or advertised will be our products or services, seminars, conferences or events, and
                  those of our affiliates or business partners;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">the relevant information may be sent
                  to
                  you by email, in-app message or WhatsApp message;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">you may opt out any time by WhatsApp
                  us
                  at (<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><a href="mailto:info@theachievers.cc"
                    class="a" target="_blank">) or emailing us at info@theachievers.cc.</a> We will cease to send you
                  marketing information without charge.</p>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
              </li>
            </ul>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Disclosure of your information</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <p style="padding-top: 4pt;padding-left: 23pt;text-indent: 0pt;line-height: 13pt;text-align: left;">We will keep
          your personal data we hold confidential but you agree we may provide information</p>
        <p style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">to:</p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l9">
          <li>
            <p style="padding-top: 4pt;padding-left: 41pt;text-indent: -18pt;text-align: justify;">any member of our
              group, which means our subsidiaries, our ultimate holding company and its subsidiaries, as defined in
              Schedule 1 of the Securities and Futures Ordinance (Cap. 571) of the Law of Hong Kong;</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">personnel, agents, advisers, auditors,
              contractors, financial institutions, and service providers in connection with our operations or services
              (for example staff engaged in the fulfilment of your order, the processing of your payment and the
              provision
              of support services);</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">our overseas offices, affiliates,
              business
              partners and counterparts (on a need-to-know basis only);</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">persons under a duty of
              confidentiality to us;</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">persons to whom we are required to make
              disclosure under applicable laws and regulations in or outside of Hong Kong; or</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">actual or proposed transferees of our
              operations (or a substantial part thereof) in or outside of Hong Kong.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Cookies</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l10">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Our Site uses cookies to distinguish you
              from other users of the Site. This helps us to provide you with a good experience when you browse our Site
              and also allows us to improve our Site.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">A cookie is a small file of letters and
              numbers that we store on your browser or the hard drive of your computer if you agree to the use of
              cookies.
              Cookies contain information that is transferred to your computer&#39;s hard drive.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: justify;">We use persistent cookies and session
              cookies. A persistent cookie stays in your browser and will be read by us when you return to our Site or a
              partner site that uses our services. Session cookies only last for as long as the session (usually the
              current visit to a website or a browser session).</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;line-height: 12pt;text-align: justify;">We use the following
              cookies:</p>
            <ul id="l11">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: justify;">Strictly necessary cookies – These
                  are cookies that are required for the operation of our Site. They include, for example, cookies that
                  enable you to log into secure areas of our website, use a shopping cart or make use of e-billing
                  services.</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: justify;">Analytical/performance cookies –
                  They allow us to recognise and count the number of visitors and to see how visitors move around our
                  Site
                  when they are using it. This helps</p>
                <p style="padding-top: 4pt;padding-left: 59pt;text-indent: 0pt;text-align: left;">us to improve the way
                  our Site works, for example, by ensuring that users are finding what they are looking for easily.</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">Functionality cookies – These are
                  used
                  to recognise you when you return to our Site. This enables us to personalise our content for you,
                  greet
                  you by name and remember your preferences (for example, your choice of language or region).</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;text-align: left;">Targeting cookies – These cookies
                  record your visit to our Site, the pages you have visited and the links you have followed. We will use
                  this information to make our Site and the information displayed on it more relevant to your interests.
                </p>
              </li>
            </ul>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You can block cookies by activating the
              setting on your browser that allows you to refuse the setting of all or some cookies. However, if you do
              so,
              you may not be able to access all or parts of our Site.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We may use third-party web services on
              our
              Site. The service providers that administer these services use technologies such as cookies (which are
              likely to be analytical/performance cookies or targeting cookies), web server logs and web beacons to help
              us analyse how visitors use our Site and make the information displayed on it more relevant to your
              interests. The information collected through these means (including IP addresses) is disclosed to these
              service providers. These analytics services may use the data collected to contextualise and personalise
              the
              marketing materials of their own advertising network.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Third-party sites</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Our Site or our communication with you may from
          time to time contain links to third-party websites over which we have no control. If you follow a link to any
          of
          these websites, please note that they have their own practices and policies. We encourage you to read the
          privacy policies or statements of these websites understand your rights. We accept no responsibility or
          liability for any practices of third-party websites.</p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Security</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l12">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;line-height: 13pt;text-align: left;">All information you
              provide to us is stored on our secure servers.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We restrict access to personal
              information
              to our employees, service providers and contractors on a strictly need-to-know basis and ensure that those
              persons are subject to contractual confidentiality obligations.</p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">We review our information collection,
              storage and processing practices from time to time to guard against unauthorised access, processing or
              use.
            </p>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Please note, however, the transmission of
              information via the Internet is not completely secure. Although we will do our best to protect your
              personal
              data, we cannot guarantee the security of your data transmitted to our Site; any transmission is at your
              own
              risk.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Your rights</h5>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <ol id="l13">
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">You have the right to:</p>
            <ul id="l14">
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">check whether we
                  hold
                  personal data about you;</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">access any personal
                  data we hold about you; and</p>
              </li>
              <li>
                <p style="padding-left: 59pt;text-indent: -18pt;line-height: 13pt;text-align: left;">require us to
                  correct
                  any inaccuracy or error in any personal data we hold about you.</p>
              </li>
            </ul>
          </li>
          <li>
            <p style="padding-left: 41pt;text-indent: -18pt;text-align: left;">Any request under Clause 7.1 may be
              subject
              to a small administrative fee to meet our cost in processing your request.</p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
          </li>
        </ol>
      </li>
      <li>
        <h5 style="padding-left: 23pt;text-indent: -18pt;text-align: left;">Changes to our privacy policy</h5>
      </li>
    </ol>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">We may amend this policy from time to time by
      posting
      the updated policy on our Site. By continuing to use our Site after the changes come into effect means that you
      agree to be bound by the revised policy.</p>
    <p style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">(As of 16/09/2021)</p>
  </div>
</div>
@endsection