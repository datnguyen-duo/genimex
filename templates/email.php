<?php
/* Template Name: Email Signature */

$themeurl = get_bloginfo('template_url');
$logo = get_field('logo');
$name = get_field('name');
$linkedin = get_field('linkedin');
$phone_number = get_field('phone_number');
$website = get_field('website');
$address = get_field('address');

if ( post_password_required() ) {
  ?>
<style>
  @font-face {
    font-family: "PPNeueMontreal-Regular";
    font-style: normal;
    font-weight: 400;
    src: url("<?php echo $themeurl?>/build/fonts/PPNeueMontreal-Regular.e975bf83.woff2")
        format("woff2"),
      url("<?php echo $themeurl?>/build/fonts/PPNeueMontreal-Regular.11e3b547.woff")
        format("woff");
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  form {
    align-content: baseline;
    display: flex;
    flex-direction: column;
    height: 100%;
    justify-content: center;
    align-items: center;
    font-family: "PPNeueMontreal-Regular";
  }
  form label {
    font-size: 64px;
    text-transform: uppercase;
  }

  form .wrapper input:nth-child(1) {
    border: 1px solid #000;
    outline: none;
  }
  form .wrapper input:nth-child(2) {
    border: 1px solid #000;
    height: 100%;
    padding: 0 1em;
    background: none;
    outline: none;
    border-left: none;
  }
</style>
<?php the_content();

} else {

  get_header();?>
<div class="email-signature">
  <div id="signature">
    <table
      style="font-family: 'Noto Sans SC', Arial, Helvetica"
      class="table__StyledTable-sc-1avdl6r-0 iasblw"
      cellspacing="0"
      cellpadding="0"
    >
      <tbody>
        <tr>
          <td>
            <table
              style="font-family: 'Noto Sans SC', Arial, Helvetica"
              class="table__StyledTable-sc-1avdl6r-0 iasblw"
              cellspacing="0"
              cellpadding="0"
            >
              <tbody>
                <tr>
                  <td style="vertical-align: middle" valign="middle">
                    <table
                      style="font-family: 'Noto Sans SC', Arial, Helvetica"
                      class="table__StyledTable-sc-1avdl6r-0 iasblw"
                      cellspacing="0"
                      cellpadding="0"
                    >
                      <tbody>
                        <tr>
                          <td
                            style="text-align: center"
                            class="template1__ImageContainer-sc-nmby7a-0 jTxCHa"
                          >
                            <img
                              src="<?php echo $logo['url']; ?>"
                              role="presentation"
                              style="display: block; max-width: 90px"
                              class="image__StyledImage-sc-hupvqm-0 eLouvR"
                              width="90"
                            />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td width="22"><div></div></td>
                  <td style="padding: 0px; ">
                    <table
                      style="font-family: 'Noto Sans SC', Arial, Helvetica"
                      class="table__StyledTable-sc-1avdl6r-0 iasblw"
                      cellspacing="0"
                      cellpadding="0"
                    >
                      <tbody>
                        <tr style="">
                          <td style="padding: 0px; color: rgb(0, 0, 0)">
                            <p
                              color="#43BFAD"
                              style="
                                margin: 0px;
                                font-size: 16px;
                                color: rgb(67, 191, 173);
                                font-weight: 500;
                                white-space: nowrap;
                              "
                              class="name__NameContainer-sc-1m457h3-0 jCjfGD"
                            >
                              <?php echo $name; ?>
                            </p>
                          </td>
                        </tr>

                        <tr style="">
                          <td style="">
                            <table
                              style="
                                font-family: 'Noto Sans SC', Arial, Helvetica;
                                width: 100%;
                              "
                              class="table__StyledTable-sc-1avdl6r-0 iasblw"
                              cellspacing="0"
                              cellpadding="0"
                            >
                              <tbody>
                                <tr>
                                  <td style="vertical-align: top" width="30" valign="top">
                                    <a
                                      href="<?php echo $linkedin['url']; ?>"
                                      color="#4b4c4d"
                                      style="
                                        display: block;
                                        text-decoration: none;
                                        color: rgb(0, 0, 0);
                                        font-size: 12px;
                                      "
                                      class="contact-info__ExternalLink-sc-mmkjr6-2 dwaWtg"
                                    >
                                      <img
                                        src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-linkedin-1.png"
                                        color="#43bfad"
                                        alt="address"
                                        style="display: block"
                                        class="contact-info__ContactLabelIcon-sc-mmkjr6-0 glcxte"
                                        width="20"
                                    /></a>
                                  </td>
                                  <td
                                    style="width: 250px; vertical-align: middle"
                                    valign="middle"
                                  >
                                    <span
                                      style="
                                        padding: 0px;
                                        font-size: 12px;
                                        color: rgb(0, 0, 0);
                                        white-space: nowrap;
                                      "
                                      ><?php echo $linkedin['title']; ?></span
                                    >
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <hr width="100%" size="1" align="center">
                    <table
                      style="font-family: 'Noto Sans SC', Arial, Helvetica"
                      class="table__StyledTable-sc-1avdl6r-0 iasblw"
                      cellspacing="0"
                      cellpadding="0"
                    >
                      <tbody>
                        <tr style="">
                          <td style="vertical-align: top;" width="30" valign="top">
                            <img
                              src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-phone-1.png"
                              alt="mobilePhone"
                              style="display: block;"
                              width="20"
                            />
                          </td>
                          <td style="padding: 0px; color: rgb(0, 0, 0); vertical-align: middle" valign="middle">
                            <span
                              color="#4b4c4d"
                              style="
                                font-size: 12px;
                                color: rgb(0, 0, 0);
                                white-space: nowrap;
                              "
                            >
                              <?php echo $phone_number; ?>
                            </span>
                          </td>
                        </tr>
                        <tr style="">
                          <td style="vertical-align: top;" width="30" valign="top">
                            <a
                              href="<?php echo $website['url']; ?>"
                              color="#4b4c4d"
                              style="
                                display: block;
                                text-decoration: none;
                                color: rgb(0, 0, 0);
                                font-size: 12px;
                              "
                              class="contact-info__ExternalLink-sc-mmkjr6-2 dwaWtg"
                            >
                              <img
                                src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-website-1.png"
                                color="#43bfad"
                                alt="address"
                                style="display: block"
                                class="contact-info__ContactLabelIcon-sc-mmkjr6-0 glcxte"
                                width="20"
                            /></a>
                          </td>
                          <td style="padding: 0px; vertical-align: middle" valign="middle">
                            <span
                              color="#4b4c4d"
                              style="
                                font-size: 12px;
                                color: rgb(0, 0, 0);
                                white-space: nowrap;
                              "
                            >
                              <?php echo $website['title']; ?>
                            </span>
                          </td>
                        </tr>
                        <tr style="">
                          <td style="vertical-align: top" width="30" valign="top">
                            <img
                              src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-location-1.png"
                              color="#43bfad"
                              alt="address"
                              style="display: block"
                              class="contact-info__ContactLabelIcon-sc-mmkjr6-0 glcxte"
                              width="20"
                            />
                          </td>
                          <td style="padding: 0px; width: 250px; vertical-align: middle" valign="middle">
                            <span
                              color="#4b4c4d"
                              style="font-size: 12px; color: rgb(0, 0, 0)"
                              class="contact-info__Address-sc-mmkjr6-3 ikFVIq"
                              ><?php echo $address; ?></span
                            >
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="btn small ctc">
    <span>Copy Full Signature</span>
  </div>

  <div id="signature_no-linkedin">
  <table
  style="font-family: 'Noto Sans SC', Arial, Helvetica"
  class="table__StyledTable-sc-1avdl6r-0 iasblw"
  cellspacing="0"
  cellpadding="0"
>
  <tbody>
    <tr>
      <td>
        <table
          style="font-family: 'Noto Sans SC', Arial, Helvetica"
          class="table__StyledTable-sc-1avdl6r-0 iasblw"
          cellspacing="0"
          cellpadding="0"
        >
          <tbody>
            <tr>
              <td style="vertical-align: middle" valign="middle">
                <table
                  style="font-family: 'Noto Sans SC', Arial, Helvetica"
                  class="table__StyledTable-sc-1avdl6r-0 iasblw"
                  cellspacing="0"
                  cellpadding="0"
                >
                  <tbody>
                    <tr>
                      <td
                        style="text-align: center"
                        class="template1__ImageContainer-sc-nmby7a-0 jTxCHa"
                      >
                        <img
                          src="<?php echo $logo['url']; ?>"
                          role="presentation"
                          style="display: block; max-width: 90px"
                          class="image__StyledImage-sc-hupvqm-0 eLouvR"
                          width="90"
                        />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td width="22"><div></div></td>
              <td style="padding: 0px">
                <table
                  style="font-family: 'Noto Sans SC', Arial, Helvetica"
                  class="table__StyledTable-sc-1avdl6r-0 iasblw"
                  cellspacing="0"
                  cellpadding="0"
                >
                  <tbody>
                    <tr style="">
                      <td style="padding: 0px; color: rgb(0, 0, 0)">
                        <p
                          color="#43BFAD"
                          style="
                            margin: 0px;
                            font-size: 16px;
                            color: rgb(67, 191, 173);
                            font-weight: 500;
                            white-space: nowrap;
                          "
                          class="name__NameContainer-sc-1m457h3-0 jCjfGD"
                        >
                          <?php echo $name; ?>
                        </p>
                      </td>
                    </tr>

                    <tr style="">
                      <td style="">
                        <table
                          style="
                            font-family: 'Noto Sans SC', Arial, Helvetica;
                            width: 100%;
                          "
                          class="table__StyledTable-sc-1avdl6r-0 iasblw"
                          cellspacing="0"
                          cellpadding="0"
                        >
                          <tbody>
                            <tr>
                              <td
                                style="width: 250px; vertical-align: middle"
                                valign="middle"
                              >
                                <span
                                  style="
                                    padding: 0px;
                                    font-size: 12px;
                                    color: rgb(0, 0, 0);
                                    white-space: nowrap;
                                  "
                                  ><?php echo $linkedin['title']; ?></span
                                >
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <hr width="100%" size="1" align="center" />
                <table
                  style="font-family: 'Noto Sans SC', Arial, Helvetica"
                  class="table__StyledTable-sc-1avdl6r-0 iasblw"
                  cellspacing="0"
                  cellpadding="0"
                >
                  <tbody>
                    <tr style="">
                      <td style="vertical-align: top" width="30" valign="top">
                        <img
                          src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-phone-1.png"
                          alt="mobilePhone"
                          style="display: block"
                          width="20"
                        />
                      </td>
                      <td
                        style="
                          padding: 0px;
                          color: rgb(0, 0, 0);
                          vertical-align: middle;
                        "
                        valign="middle"
                      >
                        <span
                          color="#4b4c4d"
                          style="
                            font-size: 12px;
                            color: rgb(0, 0, 0);
                            white-space: nowrap;
                          "
                        >
                          <?php echo $phone_number; ?>
                        </span>
                      </td>
                    </tr>
                    <tr style="">
                      <td style="vertical-align: top" width="30" valign="top">
                        <a
                          href="<?php echo $website['url']; ?>"
                          color="#4b4c4d"
                          style="
                            display: block;
                            text-decoration: none;
                            color: rgb(0, 0, 0);
                            font-size: 12px;
                          "
                          class="contact-info__ExternalLink-sc-mmkjr6-2 dwaWtg"
                        >
                          <img
                            src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-website-1.png"
                            color="#43bfad"
                            alt="address"
                            style="display: block"
                            class="contact-info__ContactLabelIcon-sc-mmkjr6-0 glcxte"
                            width="20"
                        /></a>
                      </td>
                      <td
                        style="padding: 0px; vertical-align: middle"
                        valign="middle"
                      >
                        <span
                          color="#4b4c4d"
                          style="
                            font-size: 12px;
                            color: rgb(0, 0, 0);
                            white-space: nowrap;
                          "
                        >
                          <?php echo $website['title']; ?>
                        </span>
                      </td>
                    </tr>
                    <tr style="">
                      <td style="vertical-align: top" width="30" valign="top">
                        <img
                          src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-location-1.png"
                          color="#43bfad"
                          alt="address"
                          style="display: block"
                          class="contact-info__ContactLabelIcon-sc-mmkjr6-0 glcxte"
                          width="20"
                        />
                      </td>
                      <td
                        style="
                          padding: 0px;
                          width: 250px;
                          vertical-align: middle;
                        "
                        valign="middle"
                      >
                        <span
                          color="#4b4c4d"
                          style="font-size: 12px; color: rgb(0, 0, 0)"
                          class="contact-info__Address-sc-mmkjr6-3 ikFVIq"
                          ><?php echo $address; ?></span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

  </div>
  <div class="btn small ctc_no-linkedin">
    <span>Copy Full Signature w/o LinkedIn</span>
  </div>

  <div id="small-signature_no-linkedin">
    <table
      style="font-family: 'Noto Sans SC', Arial, Helvetica"
      class="table__StyledTable-sc-1avdl6r-0 iasblw"
      cellspacing="0"
      cellpadding="0"
    >
      <tbody>
        <tr>
          <td>
            <table
              style="font-family: 'Noto Sans SC', Arial, Helvetica"
              class="table__StyledTable-sc-1avdl6r-0 iasblw"
              cellspacing="0"
              cellpadding="0"
            >
              <tbody>
                <tr>
                  <td style="padding: 0px; ">
                    <table
                      style="font-family: 'Noto Sans SC', Arial, Helvetica"
                      class="table__StyledTable-sc-1avdl6r-0 iasblw"
                      cellspacing="0"
                      cellpadding="0"
                    >
                      <tbody>
                        <tr style="">
                          <td style="padding: 0px; color: rgb(0, 0, 0)">
                            <h2
                              color="#43BFAD"
                              style="
                                margin: 0px;
                                font-size: 16px;
                                color: rgb(67, 191, 173);
                                font-weight: 500;
                                white-space: nowrap;
                              "
                              class="name__NameContainer-sc-1m457h3-0 jCjfGD"
                            >
                              <?php echo $name; ?>
                            </h2>
                          </td>
                        </tr>

                        <tr style="">
                          <td style="">
                            <table
                              style="
                                font-family: 'Noto Sans SC', Arial, Helvetica;
                              "
                              class="table__StyledTable-sc-1avdl6r-0 iasblw"
                              cellspacing="0"
                              cellpadding="0"
                            >
                              <tbody>
                                <tr>
                                  <td style="padding: 0px; width: 250px">
                                    <span
                                      style="
                                        padding: 0px;
                                        font-size: 12px;
                                        color: rgb(0, 0, 0);
                                        white-space: nowrap;
                                      "
                                      ><?php echo $linkedin['title']; ?>
                                    </span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr style="">
                          <td style="padding: 0px">
                            <span
                              color="#4b4c4d"
                              style="
                                font-size: 12px;
                                color: rgb(0, 0, 0);
                                white-space: nowrap;
                              "
                            >
                              <?php echo $website['title']; ?>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="btn small ctc__small--no-linkedin">
    <span>Copy Small Signature</span>
  </div>
</div>

<?php  get_footer(); } ?>
