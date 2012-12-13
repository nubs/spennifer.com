express = require 'express'
app = express()
app.set 'view engine', 'hbs'
app.set 'view options'

app.use express.logger 'dev'
app.use express.static "#{__dirname}/public"

app.get '/:page?', (req, res) ->
  res.render req.params.page ? 'home'

port = process.env.PORT ? 8000
app.listen port, ->
  console.log "Listening on #{port}"
