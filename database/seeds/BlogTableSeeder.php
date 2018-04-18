<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
          ['id'=> 1, 'blog_title' => 'What is a dissertation project?', 'blog_date' => date("Y-m-d", time())
, 'blog_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et nibh diam. Morbi suscipit nunc tortor. Suspendisse ac tempus risus, sed mattis mauris. Integer nibh lorem, iaculis nec lectus sed, consequat tincidunt quam. Aenean dolor mauris, bibendum ac faucibus eget, mollis in ipsum. ', 'slug' => 'what-is-a-dissertation-project', 'type' => 1],

['id'=> 2, 'blog_title' => 'Sample Abstract', 'blog_date' => date("Y-m-d", time())
, 'blog_content' => '
This dissertation is concerned with the exploration of special events carried out by public service
broadcasters in Europe. For this purpose, a case study method will be employed. Seven companies,
namely, British Broadcasting Company (BBC); British Broadcasting Company, Channel Three (BBC THREE);
Norsk Rikskringkasting (NRK); Rundfunk Berlin Brandenburg (RBB); Vlaamse Radio- en Televisieomroep
(VRT); Yleisradio Oy (YLE) and Norddeustscher Rundfunk (NDR) participated in the project.

The main hypothesis proposes that being the public broadcasters part of the creative industry they prepare
and execute creative special events. The second research question intends to learn in which cases creativity
is the main element leading to the success of the event. And the third study area is associated to
organisational creativity. In this case, the researcher intends to learn if the creativity level of an
organisation influences the creativity level of its outcomes or products.



Keywords: creativity, creative product assessment techniques, organisational creativity, special events,
public service broadcasters ', 'slug' => 'sample-abstract', 'type' => 2],

['id'=> 3, 'blog_title' => 'Sample introduction', 'blog_date' => date("Y-m-d", time())
, 'blog_content' => '
In many emerging markets, capital market is one of the most significant tools to measure the economic growth. Stoica(2002) disclosed that a good capital market is an efficient economic mechanism that organizes the monetary resources between the money providers and the users. Effective mobilization and allocation of fund enable businesses to sustain its growth and development in a country such as the stock market, which promotes capital efficiency to ensure optimal output (Osinubi,2000). The weight of capital market has driven many professionals and academicians; accountants, economists and technologists to document numerous empirical capital market issues. By using quantitative or qualitative analysis, study on capital market covers a wide range of concerns concentrating on the security prices, business failure, company performance and future cash flow (Subrahmanayam, 2010).

The most popular theme in capital market studies for the new millennium is predicting the corporate failure or financial distress. Studies on corporate failure prediction have been perceived by the government and private companies. As a great cost burden due to the corporate failure affects many individuals; the government is concerned with its total impact on the country’s economy and society, whilst private companies are interested with its corrective and preventive actions (Andreer, 2005).

Beaver (1966) has defined corporate failure as the inability of the firms to meet their financial obligation as they mature, while Elam (1975), described it as the occurrence of a firm’s total liability exceeding the fair values of its asset. Corporate failure has been known to be defined in numbers of ways, but mainly it refers to the insolvency of a firm. Yusof (2008) identified corporate failure as a synonym with failure to meet financial obligation, debt reorganization, applying bankruptcy protection or even business termination.

The study of corporate failure was started in the mid 1960’s by William H. Beaver (1966) and Edward I. Altman (1968). As Beaver (1966) claimed that financial statements are the successful bankruptcy predictor by using the univariate analysis. On the other, hand Edward Altman (1968) reviewed the work of other scholar by combining various financial ratios known as The Z-score model (a multivariate analysis). It was reported The Z- score as a better predictor for corporate failure although it has to put up with certain limitations. Since then, a great number of failure prediction models have been established using different types of approaches and frameworks.
Besides prediction model, corporate failure can also be traced through several failure signals at any level of business cycles. Sori, Hamid & Nasir (2005) concluded that, corporate failure is not a sudden event but a cumulative penalty of unsolved hassles. This claim was also supported by Ahmad, Halim, Hamzah and Husni (2008), who revealed in their study that, economical factors, financial factors, marketing deficiencies, corporate fraud and human error were the logical factors that expose a business to the corporate failure.

To be continued...
<i>https://www.ukessays.com/dissertation/introduction/accounting.php</i>
 ', 'slug' => 'sample-introduction', 'type' => 2]

        ]);
    }
}
