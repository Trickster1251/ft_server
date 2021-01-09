# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    autoindex.sh                                       :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: walethea <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/01/09 06:42:08 by walethea          #+#    #+#              #
#    Updated: 2021/01/09 06:53:01 by walethea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/bin/bash/

if [ "$1" = on ]; then
	sed -i 's/#autoindex on/autoindex on/' /etc/nginx/sites-available/nginx.conf;
	echo "autoindex [on]";
fi
if [ "$1" = off ]; then
	sed -i 's/autoindex on/#autoindex on/' /etc/nginx/sites-available/nginx.conf;
	echo "autoindex [off]";
fi

service nginx restart;