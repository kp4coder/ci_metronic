<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
	<!--begin::Container-->
	<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
		<!--begin::Copyright-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted fw-bold me-1">&copy; <?php echo date('Y'); ?></span>
			 All rights reserved.
		</div>
		<!--end::Copyright-->
		<!--begin::Menu-->
		<?php if (ENVIRONMENT=='development'): ?>
			<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
				<li class="menu-item">
					CI Bootstrap Version: <strong><?php echo CI_BOOTSTRAP_VERSION; ?></strong>,
				</li>
				<li class="menu-item">
					CI Version: <strong><?php echo CI_VERSION; ?></strong>, 
				</li>
				<li class="menu-item">
					Elapsed Time: <strong>{elapsed_time}</strong> seconds, 
				</li>
				<li class="menu-item">
					Memory Usage: <strong>{memory_usage}</strong>
				</li>
			</ul>
		<?php endif; ?>
		<!--end::Menu-->
	</div>
	<!--end::Container-->
</div>
<!--end::Footer-->