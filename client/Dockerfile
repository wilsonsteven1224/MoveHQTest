FROM node:14-alpine

WORKDIR /app
#RUN npm install -g @vue/cli @vue/cli-init webpack-dev-server webpack-cli webpack

COPY ./package.json /app
COPY ./package-lock.json /app
RUN npm install -D

CMD npm run dev