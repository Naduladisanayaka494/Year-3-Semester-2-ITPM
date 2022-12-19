const dbConfig = require("../config/db.config.js");

const {Sequelize, DataTypes, Op} = require("sequelize");

const sequelize = new Sequelize(dbConfig.DB, dbConfig.USER, dbConfig.PASSWORD, {
  host: dbConfig.HOST,
  port: dbConfig.PORT,
  dialect: dbConfig.dialect,
  operatorsAliases: 0,

  pool: {
    max: dbConfig.pool.max,
    min: dbConfig.pool.min,
    acquire: dbConfig.pool.acquire,
    idle: dbConfig.pool.idle
  }
});

const db = {};

db.Sequelize = Sequelize;
db.sequelize = sequelize;
db.Op = Op;

db.branches = require("./branch.model")(sequelize, Sequelize);
db.products = require("./product.model")(sequelize, Sequelize);
db.Steward = require("./steward.model")(sequelize, Sequelize);
db.invoice_products = require("./invoice_product.model")(sequelize, Sequelize);
db.payments = require("./payment.model")(sequelize, Sequelize);
db.branches.hasMany(db.products,{
    foreignKey: 'branchId'
});
db.products.belongsTo(db.branches);
db.Users = require("./user.model")(sequelize, Sequelize);
db.branches.hasMany(db.Users,{
  foreignKey: 'branchId'
});
db.Users.belongsTo(db.branches);
db.stores = require("./store.model")(sequelize, Sequelize);
db.stores.hasMany(db.branches,{
  foreignKey: 'storeId'
});
db.branches.belongsTo(db.stores);
db.stores.hasMany(db.Users,{
  foreignKey: 'storeId'
});
db.Users.belongsTo(db.stores)

db.categories = require("./category.model")(sequelize, Sequelize);
db.branches.hasMany(db.categories,{
  foreignKey: 'branchId'
});
db.categories.belongsTo(db.branches);

db.categories.hasMany(db.products,{
  foreignKey: 'categoryId'
});
db.products.belongsTo(db.categories);

db.Floors = require("./floor.model")(sequelize, Sequelize);
db.branches.hasMany(db.Floors,{
  foreignKey: 'branchId'
});
db.Floors.belongsTo(db.branches);

db.counters = require("./counter.model")(sequelize, Sequelize);
db.branches.hasMany(db.counters,{
  foreignKey: 'branchId'
});
db.counters.belongsTo(db.branches);
db.Floors.hasMany(db.counters,{
  foreignKey: 'floorId'
});
db.counters.belongsTo(db.Floors);

db.type = require("./user-type.model")(sequelize, Sequelize);
db.type.hasMany(db.Users,{
  foreignKey: 'typeId'
});
db.Users.belongsTo(db.type);

db.customers = require("./customer.model")(sequelize, Sequelize);
db.branches.hasMany(db.customers,{
  foreignKey: 'branchId'
});
db.customers.belongsTo(db.branches);
db.invoices = require("./invoice.model")(sequelize, Sequelize);
db.invoices.belongsTo(db.branches);
db.branches.hasMany(db.invoices,{
  foreignKey: 'branchId'
});
db.invoices.belongsTo(db.customers);
db.customers.hasMany(db.invoices,{
  foreignKey: 'customerId'
});
db.invoices.belongsTo(db.Users);
db.Users.hasMany(db.invoices,{
  foreignKey: 'userId'
});

db.invoices.belongsTo(db.counters);
db.counters.hasMany(db.invoices,{
  foreignKey: 'counterId'
});

db.invoices.belongsTo(db.Steward);


db.Steward.belongsTo(db.branches);

db.invoice_products.belongsTo(db.invoices);
db.invoice_products.belongsTo(db.products);

db.payments.belongsTo(db.invoices);
db.payments.belongsTo(db.branches);

module.exports = db;