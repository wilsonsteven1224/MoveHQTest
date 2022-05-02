FROM node:14

WORKDIR /app
RUN npm install -g @vue/cli
RUN npm install -g @vue/cli-init

COPY ./package.json /app
RUN npm install

CMD npm run dev