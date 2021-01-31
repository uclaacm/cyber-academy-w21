FROM node:14
WORKDIR /home/src/app
COPY ./ ./
RUN npm ci
EXPOSE 9000
CMD [ "node", "app.js" ]