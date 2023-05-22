<?php
/**
* Template Name: Search Results
**/
get_header();

?>

<!-- main content -->
  <div class="main_content">
    <div class="s_result_content">
      <div class="result_left">
        <h4>Property Type</h4>
        <form>
          <ul class="filter_list">           
              <li>
                  <input id="chk1bhk" type="checkbox" name="chk1bhk"><label for="chk1bhk">1 BHK</label>
              </li>
              <li>
                  <input id="chk2bhk" type="checkbox" name="chk2bhk"><label for="chk2bhk">2 BHK</label>
              </li>
              <li>
                  <input id="chk3bhk" type="checkbox" name="chk3bhk"><label for="chk3bhk">3 BHK</label></li>
              <li>
                  <input id="chk4bhk" type="checkbox" name="chk4bhk"><label for="chk4bhk">4 BHK</label></li>
              <li>
                  <input id="chkPenthouse" type="checkbox" name="chkPenthouse"><label for="chkPenthouse">Penthouse</label></li>
              <li>
                  <input id="chkDuplex" type="checkbox" name="chkDuplex"><label for="chkDuplex">Duplex</label>
              </li>
          </ul>
        </form>
        <div class="filter_btn_hldr"> 
          <input type="submit" name="Button2" value="Filter" id="Button2" class="filterBtn">
        </div>
      </div>
      <div class="result_right">
        <div class="result_top">
          <h2>IDEAL SEARCH</h2>
          <div class="form_sec">
            <form>
              <div class="form_row">
                <div class="form_block custom_select">
                  <select class="select_box">
                    <option>Property Type</option>
                    <option>Residential</option>
                    <option>Commercial</option>
                  </select>
                </div>
                <div class="form_block custom_select">
                  <select class="select_box">
                    <option>Location</option>
                    <option>Guwahati</option>
                    <option>Howrah</option>
                    <option>Kolkata</option>
                  </select>
                </div>
                <div class="form_block custom_select">
                  <select class="select_box">
                    <option>Select Range</option>
                    <option>Less than 50,00,000</option>
                    <option>51,00,000 to 75,00,000</option>
                    <option>76,00,000 to 1,00,00,000</option>
                    <option>More than 1,00,00,000  </option>
                  </select>
                </div>
                <div class="form_block">
                  <input type="submit" name="" value="Get It" class="submit">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="result_container">
          <h4>Search Results</h4>
          <div class="result_row">
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Heights</h5>
                <div class="r_img"><img src="images/showimage1.jpg" alt=""></div>
                <strong>302, Acharya Prafulla Chandra (APC) Road; Sealdah, Kolkata.</strong>
                <p>2 BHK, 3 BHK, 4 BHK<span>Rs 10,940,500 to Rs 17,058,500</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Hill View</h5>
                <div class="r_img"><img src="images/showimage2.jpg" alt=""></div>
                <strong>VIP Road, Patharquarry, Near Satgaon Traffic Polic Guwahati.</strong>
                <p>2 BHK, 3 BHK, 4 BHK<span>Rs 3,200,000 to Rs 6,800,000</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Regency</h5>
                <div class="r_img"><img src="images/showimage3.jpg" alt=""></div>
                <strong>46, Diamond Harbour Road; Behala, Kolkata.</strong>
                <p>2 BHK, 3 BHK, Duplex, 4 BHK<span>Rs 5,921,500 to Rs 6,395,050</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Enclave</h5>
                <div class="r_img"><img src="images/showimage4.jpg" alt=""></div>
                <strong>Gopalpur at Rajarhat (near Derozio College), Kolkata.</strong>
                <p>2 BHK, 3 BHK, Duplex, 4 BHK<span>Rs 5,253,800 to Rs 8,320,000</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Abasan</h5>
                <div class="r_img"><img src="images/showimage5.jpg" alt=""></div>
                <strong>Narayanpur, Narendranager at Rajarhat, Kolkata.</strong>
                <p>2 BHK, 3 BHK<span>Rs 2,200,000 to Rs 2,300,000</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Exotica</h5>
                <div class="r_img"><img src="images/showimage6.jpg" alt=""></div>
                <strong>21, Pramatha Chaudhury Sarani; New Alipore, Kolkata.</strong>
                <p>2 BHK, 3 BHK, Duplex, 4 BHK<span>Rs 26,092,500 to Rs 116,977,250</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Niketan</h5>
                <div class="r_img"><img src="images/showimage7.jpg" alt=""></div>
                <strong>3, Chingrighata Lane (off E.M. Bypass), Kolkata.</strong>
                <p>2 BHK, 3 BHK, Duplex, 4 BHK<span>Rs 5,607,050 to Rs 9,275,100</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Legacy</h5>
                <div class="r_img"><img src="images/showimage8.jpg" alt=""></div>
                <strong>6B, Ironside Road; Ballygunge, Kolkata.</strong>
                <p>2 BHK, 3 BHK, Duplex, 4 BHK<span>Rs 62,834,500 to Rs 67,500,000</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Grand</h5>
                <div class="r_img"><img src="images/showimage9.jpg" alt=""></div>
                <strong>456, Grand Trunk Road, Shibpur Howrah.</strong>
                <p>2 BHK, 3 BHK, 4 BHK<span>Rs 6,358,000 to Rs 1,102,950</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Unique Residency</h5>
                <div class="r_img"><img src="images/showimage10.jpg" alt=""></div>
                <strong>Aurobindo Sarani (near Hatibagan), Kolkata.</strong>
                <p>2 BHK, 3 BHK, Duplex, 4 BHK<span>Rs 11,780,000 to Rs 17,807,500</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Unique Centre</h5>
                <div class="r_img"><img src="images/showimage11.jpg" alt=""></div>
                <strong>On E.M. Bypass (near Science City), Kolkata.</strong>
                <p>&nbsp;<span>Rs 75,000,000 to Rs 400,000,000</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Aqua View</h5>
                <div class="r_img"><img src="images/showimage12.jpg" alt=""></div>
                <strong>Maheshbathan Ward No# 28 Kolkata – 700102 (Near S Kolkata.</strong>
                <p>2 BHK, 3 BHK, 4 BHK<span>Rs 5,611,000 to Rs 10,832,500</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>


            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Greens</h5>
                <div class="r_img"><img src="images/showimage13.jpg" alt=""></div>
                <strong>Motilal Gupta Road, Kolkata.</strong>
                <p>2 BHK, 3 BHK, 4 BHK<span>Rs 5,237,000 to Rs 12,314,250</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Aurum</h5>
                <div class="r_img"><img src="images/showimage14.jpg" alt=""></div>
                <strong>Sonarpur Kolkata.</strong>
                <p>2 BHK, 3 BHK<span>Rs 3,572,500 to Rs 5,807,500</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Royale</h5>
                <div class="r_img"><img src="images/showimage15.jpg" alt=""></div>
                <strong>Kankurgachi Kolkata.</strong>
                <p>3 BHK, 4 BHK<span>Rs 0 to Rs 0</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
            <div class="r_block">
              <div class="r_block_inn">
                <h5>Ideal Imperia</h5>
                <div class="r_img"><img src="images/showimage16.jpg" alt=""></div>
                <strong>Joka Kolkata.</strong>
                <p>2 BHK, 3 BHK, 4 BHK<span>Rs 0 to Rs 0</span></p>              
                <a class="t_tour" href="#">Take a tour</a>
              </div>              
            </div>
          </div>
          <div class="pagination">
            <ul>
              <li><a href="javascript:void(0)"></a></li>
              <li class="active"><a href="javascript:void(0)">1</a></li>
              <li><a href="javascript:void(0)">2</a></li>
              <li><a href="javascript:void(0)">3</a></li>
              <li><a href="javascript:void(0)"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- main content -->
<?php get_footer(); ?>