class="<?php if ($row['estado'] ==3) {
                  echo "success";
                } else {
                      if ($row['estado'] ==2) {
                        echo "warning";
                      } else {
                        if ($row['estado'] ==1) {
                          echo "info";
                        } else {
                          # code...
                        }
                        
                      }
                      
                }
                 ?>"