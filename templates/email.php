<?php
/* Template Name: Email Signature */

$logo = get_field('logo');
$name = get_field('name');
$linkedin = get_field('linkedin');
$phone_number = get_field('phone_number');
$website = get_field('website');
$address = get_field('address');

get_header(); ?>


<div class="email-signature">
<div id="signature">
    <table
    style="font-family: 'Noto Sans SC', Arial, Helvetica"
    class="table__StyledTable-sc-1avdl6r-0 iasblw"
    cellspacing="0"
    cellpadding="0"
    >
    <link rel="preconnect" href="https://fonts.googleapis.com" /><link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
    /><link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC&display=swap"
    rel="stylesheet"
    />
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
                    <td style="vertical-align: middle">
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
                                style="display: block; max-width: 140px"
                                class="image__StyledImage-sc-hupvqm-0 eLouvR"
                                width="140"
                                />
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </td>
                    <td width="22"><div></div></td>
                    <td style="padding: 0px; vertical-align: middle">
                        <table
                        style="font-family: 'Noto Sans SC', Arial, Helvetica"
                        class="table__StyledTable-sc-1avdl6r-0 iasblw"
                        cellspacing="0"
                        cellpadding="0"
                        >
                        <tbody>
                            <tr
                            style="vertical-align: middle; height: 22px"
                            height="22"
                            >
                            <td style="padding: 0px; color: rgb(75, 76, 77)">
                                <h2
                                color="#43BFAD"
                                style="
                                    margin: 0px;
                                    font-size: 20px;
                                    color: rgb(67, 191, 173);
                                    font-weight: 500;
                                "
                                class="name__NameContainer-sc-1m457h3-0 jCjfGD"
                                >
                                <?php echo $name; ?>
                                </h2>
                            </td>
                            </tr>

                            <tr
                            style="vertical-align: middle; height: 22px"
                            height="22"
                            >
                            <td style="vertical-align: middle">
                                <table
                                style="font-family: 'Noto Sans SC', Arial, Helvetica"
                                class="table__StyledTable-sc-1avdl6r-0 iasblw"
                                cellspacing="0"
                                cellpadding="0"
                                >
                                <tbody>
                                    <tr>
                                    <td style="vertical-align: middle" width="30">
                                        <img
                                        src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-linkedin@2x.png"
                                        color="#43bfad"
                                        alt="address"
                                        style="display: block"
                                        class="contact-info__ContactLabelIcon-sc-mmkjr6-0 glcxte"
                                        width="20"
                                        />
                                    </td>
                                    <td style="padding: 0px">
                                        <a
                                        href="<?php echo $linkedin['url']; ?>"
                                        color="#4b4c4d"
                                        style="
                                            text-decoration: none;
                                            color: rgb(75, 76, 77);
                                            font-size: 14px;
                                        "
                                        class="contact-info__ExternalLink-sc-mmkjr6-2 dwaWtg"
                                        ><?php echo $linkedin['title']; ?></a
                                        >
                                    </td>
                                    </tr>
                                </tbody>
                                </table>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                        <table
                        style="width: 100%; font-family: 'Noto Sans SC', Arial, Helvetica"
                        class="table__StyledTable-sc-1avdl6r-0 iasblw"
                        cellspacing="0"
                        cellpadding="0"
                        >
                        <tbody>
                            <tr>
                            <td height="6"></td>
                            </tr>
                            <tr>
                            <td
                                color="#43bfad"
                                direction="horizontal"
                                style="
                                width: 100%;
                                border-bottom: 1px solid rgb(217, 217, 217);
                                border-left: medium none;
                                display: block;
                                "
                                class="color-divider__Divider-sc-1h38qjv-0 dVPycS"
                                width="auto"
                                height="1"
                            ></td>
                            </tr>
                            <tr>
                            <td height="6"></td>
                            </tr>
                        </tbody>
                        </table>

                        <table
                        style="font-family: 'Noto Sans SC', Arial, Helvetica"
                        class="table__StyledTable-sc-1avdl6r-0 iasblw"
                        cellspacing="0"
                        cellpadding="0"
                        >
                        <tbody>
                            <tr
                            style="vertical-align: middle; height: 22px"
                            height="22"
                            >
                            <td style="vertical-align: middle" width="30">
                                <img
                                src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-phone@2x.png"
                                color="#43bfad"
                                alt="mobilePhone"
                                style="display: block"
                                class="contact-info__ContactLabelIcon-sc-mmkjr6-0 glcxte"
                                width="20"
                                />
                            </td>
                            <td style="padding: 0px; color: rgb(75, 76, 77)">
                                <a
                                href="<?php echo $phone_number['url']; ?>"
                                color="#4b4c4d"
                                style="
                                    text-decoration: none;
                                    color: rgb(75, 76, 77);
                                    font-size: 14px;
                                "
                                class="contact-info__ExternalLink-sc-mmkjr6-2 dwaWtg"
                                ><?php echo $phone_number['title']; ?></a
                                >
                            </td>
                            </tr>
                            <tr
                            style="vertical-align: middle; height: 22px"
                            height="22"
                            >
                            <td style="vertical-align: middle" width="30" height="22">
                                <img
                                src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-website@2x.png"
                                color="#43bfad"
                                alt="website"
                                style="display: block"
                                class="contact-info__ContactLabelIcon-sc-mmkjr6-0 glcxte"
                                width="20"
                                />
                            </td>
                            <td style="padding: 0px">
                                <a
                                href="<?php echo $website['url']; ?>"
                                color="#4b4c4d"
                                style="
                                    text-decoration: none;
                                    color: rgb(75, 76, 77);
                                    font-size: 14px;
                                "
                                class="contact-info__ExternalLink-sc-mmkjr6-2 dwaWtg"
                                ><?php echo $website['title']; ?></a
                                >
                            </td>
                            </tr>
                            <tr
                            style="vertical-align: middle; height: 22px"
                            height="22"
                            >
                            <td style="vertical-align: middle" width="30">
                                <img
                                src="https://www.genimexgroup.com/wp-content/uploads/2022/12/icon-location@2x.png"
                                color="#43bfad"
                                alt="address"
                                style="display: block"
                                class="contact-info__ContactLabelIcon-sc-mmkjr6-0 glcxte"
                                width="20"
                                />
                            </td>
                            <td style="padding: 0px">
                                <span
                                color="#4b4c4d"
                                style="font-size: 14px; color: rgb(75, 76, 77)"
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
    <span>Copy Signature</span>
</div>
</div>


<?php get_footer(); ?>