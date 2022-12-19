module.exports = (sequelize, Sequelize) => {
    const Products = sequelize.define("products", {
        name: {
        type: Sequelize.STRING
      },
        code: {
        type: Sequelize.STRING
      },
        price: {
        type: Sequelize.DOUBLE
      },
      enabled: {
        type: Sequelize.BOOLEAN
      },
      createdAt: {
        type: Sequelize.DATE,
        allowNull: false,
        defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
      },
      updatedAt:{
        type: Sequelize.DATE,
        allowNull: false,
        defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
      }
    });
  
    return Products;
  };