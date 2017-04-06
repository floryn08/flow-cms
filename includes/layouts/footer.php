    <div id="footer">Copyright <?php echo date("Y"); ?>, Flow CMS</div>

	</body>
    </div><!-- /st-content-inner -->
    </div><!-- /st-content -->
    </div><!-- /st-pusher -->
    </div><!-- /st-container -->
    <script src="js/classie.js"></script>
    <script src="js/sidebarEffects.js"></script>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
