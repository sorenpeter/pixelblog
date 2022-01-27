<nav class="profileCard">
  <div class="grid">
    <section class="u-author h-card">
        
        <div class="avatar">
          <a href="<?=$base_url?>" class="u-url"> <!-- TODO -->
          
            <img class="avatar u-photo" src="<?=$avatar?>" alt="" loading="lazy">
          </a>
        </div>

        <div class="bio">
          <a href="<?=$base_url?>" class="u-url p-name"> <!-- TODO -->
            <?=$nick?></a>
            <!-- <br><span class="p-org"><?=$public_url?></span> -->
          <blockquote><?=$description?></blockquote>
        </div>

    </section>

    <aside><small>
          <a href="https://yarn.social/" class="button">How to follow...</a>
              
<!--       <details>
        <summary>Block / Report User</summary>
         <p>If this user/feed is violating this Pod's (yarn.local) community guidelines as set out in the <a href="/abuse">Abuse Policy</a>, please report them immediately!</p><p>You are also free to Unfollow or Mute this user or feed. Muting will also remove that user/feed's content from your view and you will no longer see content from that user/feed anywhere.</p>
        <ul><strong>
          <li>
            
              <a href="/mute?nick=fastidious&amp;url=https%3a%2f%2farrakis.netbros.com%2fuser%2ffastidious%2ftwtxt.txt"><i class="ti ti-volume-3"></i>&nbsp;Mute</a>
            
          </li>
          <li>
            <a href="/report?nick=fastidious&amp;url=https%3a%2f%2farrakis.netbros.com%2fuser%2ffastidious%2ftwtxt.txt"><i class="ti ti-urgent" style="color:red;"></i>&nbsp;Report</a>
          </li>
        </strong>  
        </ul>
      </details> -->

<!--       <small class="compact">
      
          <span class="avoidwrap"><strong>@fastidious</strong> does not follow you</span>
          <span class="avoidwrap">(they may not see your replies!)</span>
          
          
      </small> -->

      </small>  
    </aside>
  </div>

  <hr>

<?php include $base_path."layout/nav-bar.php" ?>

</nav>