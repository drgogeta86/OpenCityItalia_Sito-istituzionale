<?php /* #?ini charset="utf-8"? 

[DashboardSettings]
DashboardBlocks[]
DashboardBlocks[]=drafts
DashboardBlocks[]=latest_content
#DashboardBlocks[]=all_latest_content
#DashboardBlocks[]=rss
DashboardBlocks[]=usage_metrics
DashboardBlocks[]=bookmarks
DashboardBlocks[]=editorialstuff

[DashboardBlock_drafts]
Priority=30
NumberOfItems=10
PolicyList[]=content/edit

[DashboardBlock_latest_content]
Priority=40
NumberOfItems=10
PolicyList[]=content/read

[DashboardBlock_all_latest_content]
Priority=50
NumberOfItems=10
PolicyList[]=content/read

[DashboardBlock_rss]
Priority=50
NumberOfItems=10
PolicyList[]=rss/edit

[DashboardBlock_bookmarks]
Priority=1
NumberOfItems=10
PolicyList[]=content/bookmark

/*?>