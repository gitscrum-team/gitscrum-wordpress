<?php
if ( !empty($project['dates']['start']) ) {
    $start = explode(' ',$project['dates']['start']['timezone']);
}

if ( !empty($project['dates']['due']) ) {
    $due = explode(' ',$project['dates']['due']['timezone']);
}
?>
<div class="bunny-project-card mb-2 el-col el-col-24 el-col-sm-12 el-col-md-8 el-col-lg-6 el-col-xl-4" data-slug="launchsync-project" style="padding-left: 5px; padding-right: 5px;">
    <div class="el-card is-hover-shadow">
        <div class="el-card__body">
            <div class="manage-label" style="background: rgba(65, 35, 163, 0.3);"></div>
            <div class="p-2" style="height: 115px; z-index: 2; position: relative;">
                <div class="d-flex">
                    <a class="me-2 project-avatar el-link el-link--default">
                        <span class="el-link--inner">
                            <span class="border el-avatar el-avatar--square" style="height: 60px; width: 60px; line-height: 60px;">
                                <img src="<?php echo $project['logo'] ?>" style="object-fit: cover;">
                            </span>
                        </span>
                    </a>
                    <div class="w-100">
                        <a alt="<?php echo $project['name'] ?>" title="<?php echo $project['name'] ?>" class="el-link el-link--default">
                            <span class="el-link--inner"><strong class="museo-sans-700"><?php echo $project['name'] ?></strong></span>
                        </a>
                        <div class="d-flex justify-content-between">
                            <div class="small d-flex text-muted" style="color: rgb(0, 0, 0);">
                                <span class="small text-uppercase font-weight-400"><?php echo $project['visibility']['title'] ?></span>
                            </div>
                        <span link="" class="me-1"><div role="tooltip" id="el-popover-7941" aria-hidden="true" class="el-popover el-popper" tabindex="0" style="width: 160px; display: none;">
                        <div class="pb-0 mb-0"><p class="m-0 lh-sm text-muted small museo-sans-700">Task Stats</p><div class="border-top mt-2 pt-2"><div class="d-flex justify-content-between align-items-center mb-1"><p class="small text-muted m-0">  Open</p><span class="el-tag el-tag--info el-tag--mini el-tag--light"><?php echo $project['stats']['open'] ?></span></div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="small text-muted m-0"> Progress</p><span class="el-tag el-tag--info el-tag--mini el-tag--light"><?php echo $project['stats']['progress'] ?></span></div>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <p class="small text-muted m-0"> Closed</p><span class="el-tag el-tag--info el-tag--mini el-tag--light"><?php echo $project['stats']['closed'] ?></span></div>
                    </div>
                </div>
            </div><span class="el-popover__reference-wrapper"><p class="m-0 small position-relative text-primary el-popover__reference" aria-describedby="el-popover-7941" tabindex="0" style="top: -2px; cursor: pointer;"><span class="small"><?php echo $project['stats']['total'] ?> TASKS</span></p>
            </span>
            </span>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between small"><span class="small text-uppercase museo-sans-700">In Progress: <?php echo $project['percent'] ?>%</span>
    <div class="small"><span class="text-uppercase text-muted"><?php if ( !empty($start) ) { echo $start[0]; } ?>&nbsp;-&nbsp;<?php if ( !empty($due) ) { echo $due[0]; } ?></span></div>
</div>
<div class="d-flex">
  <?php foreach ( $project['labels'] as $label ) {?> 
  <a class="el-link el-link--default me-1" title="<?php echo $label['title'] ?>" alt="<?php echo $label['title'] ?>">
    <span class="el-tag el-tag--mini el-tag--light" style="width: 20px; height: 10px; border: 1px solid transparent; color: <?php echo $label['color'] ?> !important; background: <?php echo $label['color'] ?> !important;"></span>
  </a>
  <?php } ?>
</div>
<div class="mt-2 d-flex members mb-1">
    <?php foreach( $project['users'] as $user ) { ?>
    <div class="me-1">
        <div max="8">
            <div class="unique-user">
                <div class="d-flex align-items-center avatar">
                    <div class="el-badge size-24 offline" title="<?php echo $user['name'] ?>" alt="<?php echo $user['name'] ?>">
                        <div class="d-flex align-items-center" style="width: 26px; height: 27px; margin-bottom: -3px;">
                            <a title="<?php echo $user['name'] ?>" alt="<?php echo $user['name'] ?>" class="lh-sm el-link el-link--default">
                                <span class="el-link--inner"><span class="border el-avatar el-avatar--circle" style="height: 24px; width: 24px; line-height: 24px;"><img src="<?php echo $user['avatar'] ?>" style="object-fit: cover;"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="el-dialog__wrapper" style="display: none;">
                <div role="dialog" aria-modal="true" aria-label="Quick Profile Snapshot" class="el-dialog" style="margin-top: 15vh;">
                    <div class="el-dialog__header"><span class="el-dialog__title">Quick Profile Snapshot</span><button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
                    <!---->
                    <!---->
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="unique-users d-flex" link="true">
        <!---->
        <!---->
        <!---->
        <!---->
    </div>
</div>
</div>
<div role="progressbar" aria-valuenow="<?php echo $project['percent'] ?>" aria-valuemin="0" aria-valuemax="100" class="el-progress el-progress--line el-progress--text-inside">
    <div class="el-progress-bar">
        <div class="el-progress-bar__outer" style="height: 8px; background-color: rgb(235, 238, 245);">
            <div class="el-progress-bar__inner" style="width: <?php echo $project['percent'] ?>%;">
                <div class="el-progress-bar__innerText" style="color: rgb(96, 98, 102);"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>