# Origin image
FROM ubuntu:16.04

# update
RUN apt update

# Setup Server Environment
RUN apt-get update && apt install -y \
    apache2 \
    php \
    libapache2-mod-php \
    python3

RUN echo "cysoc{c4n_u_pls_st0p_ste4l1nG_MY_s4u(e}" > /flag.txt && echo "cysoc{hey_that's_pretty_good_ngl_im_very_proud_of_u}" > /root/flag2.txt
RUN echo "unused script..." > /idk.sh && chmod 4777 /idk.sh
# add new user if it is needed
# RUN useradd -d /home/ctf/ -m -p ctf -s /bin/bash ctf
# RUN echo "ctf:ctf" | chpasswd

# Entry point
ENTRYPOINT service apache2 start && /bin/bash
