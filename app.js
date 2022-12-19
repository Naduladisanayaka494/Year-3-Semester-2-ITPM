require("dotenv").config();
const express = require("express");
const cors = require("cors");
const db = require("./models");

const app = express();
app.use(cors());


app.use(express.json());

require("./routes/product.routes")(app);
require("./routes/branch.routes")(app);
require("./routes/user.routes")(app);
require("./routes/category.routes")(app);
require("./routes/floor.routes")(app);
require("./routes/counter.routes")(app);
require("./routes/customer.routes")(app);
require("./routes/invoice.routes")(app);
// require("./routes/steward.routes")(app);




const port = process.env.PORT ;

db.sequelize.sync({alter:true});

app.listen(port, () => {
  console.log("server up and running on PORT :", port);
});


